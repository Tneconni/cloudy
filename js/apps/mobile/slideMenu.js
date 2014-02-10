/**
 * Created with JetBrains PhpStorm.
 * User: Administrator
 * Date: 14-2-10
 * Time: 上午10:19
 * To change this template use File | Settings | File Templates.
 */

var slideMenu = function( element, options ){

    this.options = options || {};
    this.index = this.options.startSlide || 0;
    this.speed = this.options.speed || 300;
    this.callback = this.options.callback || function() {};
    this.delay = this.options.auto || 0;

    // reference dom elements
    this.container = element;
    this.element = this.container.children[0]; // the slide pane

    // static css
    this.container.style.overflow = 'hidden';
    this.element.style.listStyle = 'none';
    this.element.style.margin = 0;
    this.startMousemove = false;
    this.newPos = 0;
    // trigger slider initialization
    this.setup();

    // begin auto slideshow
    this.begin();

    // add event listeners
    if (this.element.addEventListener) {
        this.element.addEventListener('touchstart', this, false);
        this.element.addEventListener('touchmove', this, false);
        this.element.addEventListener('touchend', this, false);
        this.element.addEventListener('mousedown', this, false);
        this.element.addEventListener('mousemove', this, false);
        this.element.addEventListener('mouseup', this, false);
        this.element.addEventListener('mouseout', this, false);
        this.element.addEventListener('touchcancel', this, false);
        this.element.addEventListener('webkitTransitionEnd', this, false);
        this.element.addEventListener('msTransitionEnd', this, false);
        this.element.addEventListener('oTransitionEnd', this, false);
        this.element.addEventListener('transitionend', this, false);
        window.addEventListener('resize', this, false);
    }

};

slideMenu.prototype = {

    setup: function() {
        this.slides = this.element.children;
        this.length = this.slides.length;
        this.width = 90;
    },

    begin: function() {
        var _this = this;

        this.interval = (this.delay)
            ? setTimeout(function() {
            _this.next(_this.delay);
        }, this.delay)
            : 0;

    },

    handleEvent: function(e) {
        switch (e.type) {
            case 'touchstart': this.onTouchStart(e); break;
            case 'touchmove': this.onTouchMove(e); break;
            case 'mousedown': this.onTouchStart(e); break;
            case 'mousemove': this.onTouchMove(e); break;
            case 'touchcancel' :
            case 'touchend': this.onTouchEnd(e); break;
            case 'mouseup': this.onTouchEnd(e); break;
            case 'mouseout': this.onTouchEnd(e); break;
            case 'webkitTransitionEnd':
            case 'msTransitionEnd':
            case 'oTransitionEnd':
            case 'transitionend': this.transitionEnd(e); break;

            case 'resize': this.setup(); break;
        }
    },

    onTouchStart : function(e){
        this.startMousemove = true;
        this.deltaX = 0;


        var offsetX = 0,
            offsetY = 0;
        var pageX = '';
        var pageY = '';
        if(e.type.indexOf('mouse') > -1 ) {
            this.startMousemove = true;
//          pageX = (e.clientX + document.body.scrollLeft || e.pageX) - offsetX || 0;
//          pageY = (e.clientY + document.body.scrollTop || e.pageY) - offsetY || 0;
            pageX = (e.clientX + document.documentElement.scrollLeft || e.pageX) - offsetX || 0;
            pageY = (e.clientY + document.documentElement.scrollTop || e.pageY) - offsetY || 0;

        }

        this.start = {

            // get touch coordinates for delta calculations in onTouchMove
            pageX: pageX == '' ? e.touches[0].pageX : pageX,
            pageY: pageY == '' ? e.touches[0].pageY : pageY,

            // set initial timestamp of touch sequence
            time: Number( new Date() )

        };


        // set transition time to 0 for 1-to-1 touch movement
        this.element.style.MozTransitionDuration = this.element.style.webkitTransitionDuration = 0;

        e.stopPropagation();
    },
    onTouchMove: function(e) {
        if(!this.startMousemove){
            return ;
        }

        var offsetX = 0,
            offsetY = 0;
        var currentX = '';
        var currentY = '';
        if(e.type == 'mousemove' ) {
            if( !this.startMousemove ){
                return ;
            }
            currentX = (e.clientX + document.documentElement.scrollLeft || e.pageX) - offsetX || 0;
            currentY = (e.clientY + document.documentElement.scrollTop || e.pageY) - offsetY || 0;

        }else{
            currentX = e.touches[0].pageX;
            currentY = e.touches[0].pageY;
        }

        this.deltaX = currentX - this.start.pageX;

        this.deltaX =
            this.deltaX /
                ( (!this.index && this.deltaX > 0               // if first slide and sliding left
                    || this.index == this.length - 1              // or if last slide and sliding right
                    && this.deltaX < 0                            // and if sliding at all
                    ) ?
                    ( Math.abs(this.deltaX) / this.width + 1 )      // determine resistance level
                    : 1 );                                          // no resistance if false

        console.log( this.deltaX );
        this.newPos = this.deltaX - this.index * this.width;
        this.element.style.MozTransform = this.element.style.webkitTransform = 'translate3d(' + this.newPos + 'px,0,0)';


        e.stopPropagation();
    },

    onTouchEnd: function(e) {
        this.setIndexByPosition( this.newPos );
        if( !this.startMousemove ){
            return;
        }
//        console.log( 'onTouchEnd ' );
        this.startMousemove = false;
//        this.slide( this.index + ( isValidSlide && !isPastBounds ? (this.deltaX < 0 ? 1 : -1) : 0 ), this.speed );
//        this.index = this.deltaX;
//        console.log( this.deltaX );
        this.slide( this.index , this.speed );
        e.stopPropagation();
    },

    slide: function(index, duration) {

        var style = this.element.style;

        // fallback to default speed
        if (duration == undefined) {
            duration = this.speed;
        }

        // set duration speed (0 represents 1-to-1 scrolling)
        style.webkitTransitionDuration = style.MozTransitionDuration =
            style.msTransitionDuration = style.OTransitionDuration =
            style.transitionDuration = duration + 'ms';

        // translate to given index position
        style.MozTransform = style.webkitTransform = 'translate3d(' + -(index * this.width) + 'px,0,0)';
        style.msTransform = style.OTransform = 'translateX(' + -(index * this.width) + 'px)';

        // set new index to allow for expression arguments
        this.index = index;

    },
    transitionEnd: function(e) {

//        if (this.delay) this.begin();

        this.callback(e, this.index, this.slides[this.index]);

    },

    /**
     * 重新设置 index 的值, 在触摸，拖动以后
     * @param pos
     */
    setIndexByPosition : function( pos ){
        var newIndex = parseInt( Math.abs( ( pos - this.width / 2 ) / this.width ) ) % this.length;
        if( newIndex >= 3 ){
            newIndex = 3;
        }
        console.log( "this.pos:" );
        console.log( pos );

        console.log( "newIndex:" );
        console.log( newIndex );
        this.index = newIndex;
    }


};