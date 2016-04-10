<?php

/**
 * core/MY_Controller.php
 *
 * Default application controller
 *
 * ------------------------------------------------------------------------
 */
class Application extends CI_Controller {

    protected $data = array();      // parameters for view components
    protected $id;                  // identifier for our content
    protected $links = array(       // our menu navbar
        'Expertise' => '/expertise',
        'Services' => '/services',
        'Investments' => '/investments',
        'About' => '/about',
        'Contact' => '/contact'
    );
    
    /**
     * Constructor.
     * Establish view parameters & load common helpers
     */
    function __construct() {
        parent::__construct();
        // $this->load->helper('validate'); // load the helper file 'validate_helper.php'
        $this->data = array();
        $this->data['title'] = "Blackfish Enterprises"; // references the title of the entire website
    }

    /**
     * Render this page
     */
    function render($page) {
        $this->data['menubar'] = build_menu_bar($this->links, $page);
        $this->data['content'] = $this->parser->parse($this->data['pagebody'],$this->data,true);
        $this->data['data'] = &$this->data;
        $this->parser->parse('_template', $this->data);
    }
}

/* End of file MY_Controller.php */
/* Location: application/core/MY_Controller.php */