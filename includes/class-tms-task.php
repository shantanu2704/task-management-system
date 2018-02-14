<?php
/**
 * Task Management System
 * 
 * @author Shantanu Desai <shantanu2846@gmail.com>
 * @since 0.0.1
 */

// If this file is called directly, abort.
if ( !defined( 'ABSPATH' ) ) exit();

if ( !class_exists( 'TMS_Task' ) ) {
	
	/**
	 * TMS_Task
	 *
	 * @since 0.0.1
	 */
	class TMS_Task {
		
		/**
		 * Unique identifier for the task
		 * 
		 * @since 0.0.1
		 * 
		 * @var  int 
		 */
		private $ID;
		
		/**
		 * Description of the task
		 * 
		 * @since 0.0.1
		 * 
		 * @var  string 
		 */
		private $task_description;
		
		/**
		 * Status of the task ( complete or incomplete )
		 * 
		 * @since 0.0.1
		 * 
		 * @var  boolean 
		 */
		private $task_status;
		
		/**
		 * List of all the subtasks
		 * 
		 * @since 0.0.1
		 * 
		 * @var  array 
		 */
		private $subtasks;
		
		
		public function __construct() {
			
			$this->subtasks = array();
		}
	}// class TMS_Task
	
}// class_exists