<div class='row' ng-app>
    <div class='large-8 columns'>
        <!-- 博客列表 -->
        <h3 class="item-title btm-line">博客列表</h3>
        <ol class='blog-list' ng-controller="blogList">
            <li class='first'  ng-repeat="post in posts">
                <div class="{{post.imgModule}}">

                    <a href="/blog/index.php?p={{post.id}}">
                        <img src="{{post.image_url}}" />
                    </a>
                    <h4>{{post.post_title}}</h4>
                    <p>{{post.post_modified}}</p>
                    <div class='clear'></div>
                </div>
                <div class="{{post.textModule}}">

                    <a href="/blog/index.php?p={{post.ID}} ">{{post.post_title}}</a>
                </div>

            </li>

        </ol>
        <dl class="sub-nav" style='display:none'>
            <dt>Filter:</dt>
            <dd class="active"><a href="#">More</a></dd>
            <dd><a href="#">NewsNews</a></dd>
            <dd><a href="#">PhotosNews</a></dd>
            <dd><a href="#">Videos</a></dd>
        </dl>
        <div class='clear'></div>
        <!-- 项目展示 -->

        <h3 class="item-title btm-line">项目展示</h3>
        <ul class='img-queue inline-list ' ng-controller="projectList">
            <li ng-repeat="p in projects" >

                <a
                    href="{{p.link}}"
                    >
                    <img src="{{p.iamge_url}}" width="160" height="120" />
                </a>
                <p>
                    <a href="{{p.link}}" >　{{p.name}} </a>
                </p>
            </li>
        </ul>
        <div class='clear'></div>

        <!-- 前端js作品展示 -->

        <h3 class="item-title btm-line">前段js玩具</h3>
        <ul class='img-queue inline-list ' ng-controller="jsTool" >
            <li class="test" ng-repeat="tool in tools">
                <a href='{{tool.link}}'>
                    <img src="/blog/wp-content/uploads/{{ tool.image_url }}" width="160" height="120" >
                </a>
                <p>{{tool.name}}</p>
            </li>
        </ul>
        <div class='clear'></div>
    </div>
    <div class='right-win large-4 columns left-line '>

        <!-- 广告位 -->
        <div>
            <input type="text" ng-model="yourName" placeholder="Enter a name here">
            <h1>Hello, {{ yourName }}!</h1>
        </div>
        <!-- 可信任站点登陆 -->
        <div class='connect-links btm-line'>
            <h3>可用以下站点账号登陆</h3>
            <ul class='inline-list '>
                <li>
                    <a href=''><img src='http://images.nationalgeographic.com/wpf/sites/common/i/icons/fb_cng-cb1315395346.png' /></a>
                </li>
                <li>
                    <a href=''><img src='http://images.nationalgeographic.com/wpf/sites/common/i/icons/twitter_cng-cb1315395346.png' /></a>
                </li>
                <li>
                    <a href=''><img src='http://images.nationalgeographic.com/wpf/sites/common/i/icons/fb_cng-cb1315395346.png' /></a>
                </li>
                <li>
                    <a href=''><img src='http://images.nationalgeographic.com/wpf/sites/common/i/icons/twitter_cng-cb1315395346.png' /></a>
                </li>
            </ul>
        </div>
        <!-- News Watch Blog -->
        <div class='news btm-line'>
            <h3>News Watch Blog </h3>
            <ol>
                <li><a href=''>Healing Journey 2013: Tribes and Schools Cleaning Up Alaska</a></li>
                <li><a href=''>Healing Journey 2013: Tribes and Schools Cleaning Up Alaska</a></li>
                <li><a href=''>Healing Journey 2013: Tribes and Schools Cleaning Up Alaska</a></li>
                <li><a href=''>Healing Journey 2013: Tribes and Schools Cleaning Up Alaska</a></li>
                <li><a href=''>Healing Journey 2013: Tribes and Schools Cleaning Up Alaska</a></li>
            </ol>
        </div>
    </div>
</div>
<script>

function jsTool( $scope ){

    $scope.tools = <?php echo json_encode( $apps );?>;

}

function blogList( $scope ){

    $scope.posts = <?php echo json_encode($posts);?>;
    console.log( $scope.posts );
    var l = $scope.posts.length;

    var i = 0;
    angular.forEach( $scope.posts, function(){

        if( i == 0 ){

            $scope.posts[i].imgModule = '';
            $scope.posts[i].textModule = 'hide';

        }else{

            $scope.posts[i].imgModule = 'hide';
            $scope.posts[i].textModule = '';

        }
        i ++;
    } );

}

function projectList( $scope ){

    $scope.projects = <?php echo json_encode( $projects );?>;

}
</script>