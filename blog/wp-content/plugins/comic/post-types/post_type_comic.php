<?php
class PostTypeTemplate
{
    const POST_TYPE = "post-type-comic";
    private $_meta  = array(
        'meta_a',
        'meta_b',
        'meta_c',
    );

    public function __construct()
    {
        // register actions
        add_action('init', array(&$this, 'init'));
        add_action('admin_init', array(&$this, 'admin_init'));
    }
    public function init()
    {
        // Initialize Post Type
        $this->create_post_type();
        add_action('save_post', array(&$this, 'save_post'));
    } // END public function init()

    /**
     * Create the post type
     */
    public function create_post_type()
    {
        register_post_type(self::POST_TYPE,
            array(
                'labels' => array(
                    'name' => __(sprintf('%ss', ucwords(str_replace("_", " ", self::POST_TYPE)))),
                    'singular_name' => __(ucwords(str_replace("_", " ", self::POST_TYPE)))
                ),
                'public' => true,
                'has_archive' => true,
                'description' => __("This is a sample post type meant only to illustrate a preferred structure of plugin development"),
                'supports' => array(
                    'title', 'editor', 'excerpt',
                ),
            )
        );
    }

    /**
     * Save the metaboxes for this custom post type
     */
    public function save_post($post_id)
    {
        // verify if this is an auto save routine.
        // If it is our form has not been submitted, so we dont want to do anything
        if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        {
            return;
        }

        if(isset($_POST['post_type']) && $_POST['post_type'] == self::POST_TYPE && current_user_can('edit_post', $post_id))
        {
            foreach($this->_meta as $field_name)
            {
                // Update the post's meta field
                update_post_meta($post_id, $field_name, $_POST[$field_name]);
            }
        }
        else
        {
            return;
        } // if($_POST['post_type'] == self::POST_TYPE && current_user_can('edit_post', $post_id))
    }

    public function admin_init()
    {
        // Add metaboxes
        add_action('add_meta_boxes', array(&$this, 'add_meta_boxes'));
    } // END public function admin_init()

    /**
     * hook into WP's add_meta_boxes action hook
     */
    public function add_meta_boxes()
    {
        // Add this metabox to every selected post
        add_meta_box(
            sprintf('comic_%s_section', self::POST_TYPE),
            sprintf('%s Information', ucwords(str_replace("_", " ", self::POST_TYPE))),
            array(&$this, 'add_inner_meta_boxes'),
            self::POST_TYPE
        );
    }

    public function add_inner_meta_boxes($post)
    {
        // Render the job order metabox
        include(sprintf("%s/../templates/%s_metabox.php", dirname(__FILE__), self::POST_TYPE));
    }
}