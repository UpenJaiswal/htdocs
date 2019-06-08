<?php 

 $config  = [

                    'blog' => [
                                               
							                   [
							                          'field' =>  'blog_name',
							                          'label' =>  'Blog Name',
							                          'rules' =>  'required|trim|strip_tags',

							                   ],

							                   [
							                          'field' =>  'blog_detail',
							                          'label' =>  'Blog Description',
							                          'rules' =>  'required|trim|strip_tags',

							                   ],
							                   [
							                          'field' =>  'blog_image',
							                          'label' =>  'Blog Image',
							                          'rules' =>  'callback_blog_img_validation',

							                   ],
                              ],


              'clients' => [
                               
			                   [
			                          'field' =>  'clients_name',
			                          'label' =>  'Clients Name',
			                          'rules' =>  'required|trim|strip_tags|callback_check_clients_name_exists',


			                   ],
			                   [
			                          'field' =>  'contact_person',
			                          'label' =>  'Contact Person',
			                          'rules' =>  'required|trim|strip_tags',

			                   ],
			                   [
			                          'field' =>  'contact_number',
			                          'label' =>  'Contact Number',
			                          'rules' =>  'required|trim|strip_tags',

			                   ],

			                   [
			                          'field' =>  'note',
			                          'label' =>  'Note',
			                          'rules' =>  'required|trim|strip_tags',

			                   ],
			                   [
			                          'field' =>  'image',
			                          'label' =>  'Image',
			                          'rules' =>  'callback_img_validation',

			                   ],
              ],

                     'user'=>[
                                                 
							                    
							                   
							                   
							                    [
							                          'field' =>  'company',
							                          'label' =>  'Company Name',
							                          'rules' =>  'required|trim|strip_tags',

							                   ],
							                    [
							                          'field' =>  'phone',
							                          'label' =>  'Phone Number',
							                          'rules' =>  'required|trim|strip_tags',

							                   ],
							                    [
							                          'field' =>  'about_us',
							                          'label' =>  'About Us',
							                          'rules' =>  'required|trim|strip_tags',

							                   ],
							                  
							                    [
							                          'field' =>  'country',
							                          'label' =>  'Country',
							                          'rules' =>  'required|trim|strip_tags',

							                   ],
							                    [
							                          'field' =>  'city',
							                          'label' =>  'City',
							                          'rules' =>  'required|trim|strip_tags',

							                   ],
							                    [
							                          'field' =>  'image',
							                          'label' =>  'Profile Image',
							                          'rules' =>  'callback_profile_img_validation',

							                   ],

                             ],   

             'besic_profile'=>[
                                     
				                               [
							                          'field' =>  'first_name',
							                          'label' =>  'First Name',
							                          'rules' =>  'required|trim|strip_tags',

							                   ],
							                   [
							                          'field' =>  'last_name',
							                          'label' =>  'Last Name',
							                          'rules' =>  'required|trim|strip_tags',

							                   ],
				                               [
							                          'field' =>  'gender',
							                          'label' =>  'Gender',
							                          'rules' =>  'required|trim|strip_tags',

							                   ],
							                    [
							                          'field' =>  'dob',
							                          'label' =>  'Date of Birth',
							                          'rules' =>  'required|trim|strip_tags',

							                   ],
				                   
				                    [
				                          'field' =>  'country',
				                          'label' =>  'Country',
				                          'rules' =>  'required|trim|strip_tags',

				                   ],
				                    [
				                          'field' =>  'city',
				                          'label' =>  'City',
				                          'rules' =>  'required|trim|strip_tags',

				                   ],
				                  
				                    

                 ],

                  'team_member'=>[
                                     
				                    
				                     [
				                          'field' =>  'first_name',
				                          'label' =>  'First Name ',
				                          'rules' =>  'required',

				                   ],
				                   [
				                          'field' =>  'last_name',
				                          'label' =>  'Last Name ',
				                          'rules' =>  'required',

				                   ],
				                   
				                    [
				                          'field' =>  'phone',
				                          'label' =>  'Phone Number',
				                          'rules' =>  'required|trim|strip_tags',

				                   ],
				                  
				                    

                 ],      

            'project'=>[
                                     
				                    
				                     [
				                          'field' =>  'project_name',
				                          'label' =>  'Project Name ',
				                          'rules' =>  'required|trim|strip_tags|callback_check_project_name_exists',

				                   ],
				                   [
				                          'field' =>  'start_date',
				                          'label' =>  'Start date ',
				                          'rules' =>  'required',

				                   ],
				                   
				                    [
				                          'field' =>  'due_date',
				                          'label' =>  'Due Date',
				                          'rules' =>  'required|trim|strip_tags',

				                   ],
				                    [
				                          'field' =>  'status_id',
				                          'label' =>  'Status',
				                          'rules' =>  'required|trim|strip_tags',

				                   ],
				                  
				                   
				                   [
				                          'field' =>  'priority_id',
				                          'label' =>  'Priority',
				                          'rules' =>  'required|trim|strip_tags',

				                   ],
				                   [
				                          'field' =>  'external_cost',
				                          'label' =>  'External',
				                          'rules' =>  'required|trim|strip_tags',

				                   ],
				                   [
				                          'field' =>  'internal_cost',
				                          'label' =>  'Internal',
				                          'rules' =>  'required|trim|strip_tags',

				                   ],
				                   [
				                          'field' =>  'clients_id',
				                          'label' =>  'Clients',
				                          'rules' =>  'required|trim|strip_tags',

				                   ],
	                                [
				                          'field' =>  'project_image',
				                          'label' =>  'Project Image',
				                          'rules' =>  'callback_img_validation',
                                   ],
				                  
				                    

                 ],      

	            'category' => [
	                           
							                   [
							                          'field' =>  'category_name',
							                          'label' =>  'Category Name',
							                           'rules' =>  'required|trim|strip_tags',

							                   ],
	                          ],



	            'other_language' => [
	                           
							              [
				                          'field' =>  'language_id[]',
				                          'label' =>  'language',
				                          'rules' =>  'required|trim|strip_tags',

                                          ],
	                          ],

       'priority' => [
       
	                   [
                      'field' =>  'priority_name',
                      'label' =>  'Priority Name',
                       'rules' =>  'required|trim|strip_tags|callback_check_priority_name_exists',

	                   ],
                      ],


      'task' => [

						       [
							      'field' =>  'task_name',
							      'label' =>  'Task Name',
							       'rules' =>  'required|trim|strip_tags|callback_check_task_name_exists',

						       ],

						       [
							      'field' =>  'task_details',
							      'label' =>  'Task Description',
							       'rules' =>  'required|trim|strip_tags',

						       ],
						       [
							      'field' =>  'team_id[]',
							      'label' =>  'Team',
							       'rules' =>  'required|trim|strip_tags',

						       ],
						        [
							      'field' =>  'project_id',
							      'label' =>  'Project',
							       'rules' =>  'required|trim|strip_tags',

						       ],
						       [
							      'field' =>  'status_id',
							      'label' =>  'Status',
							       'rules' =>  'required|trim|strip_tags',

						       ],
						       [
							      'field' =>  'priority_id',
							      'label' =>  'Priority',
							       'rules' =>  'required|trim|strip_tags',

						       ],
			      ],

	  'status' => [

					   [
					          'field' =>  'status',
					          'label' =>  'Status',
					           'rules' =>  'required|trim|strip_tags|callback_check_status_exists',


					   ],
	                ],

          'team_role' => [
           
		                   [
		                          'field' =>  'role_name',
		                          'label' =>  'Role Name',
		                           'rules' =>  'required|trim|strip_tags|callback_check_role_name_exists',
		                   ],
                        ],
           'reach_us' => [
           
		                   [
		                          'field' =>  'mail',
		                          'label' =>  'Mail',
		                           'rules' =>  'required|trim|strip_tags',

		                   ],
		                   [
		                          'field' =>  'skype',
		                          'label' =>  'Skype ',
		                           'rules' =>  'required|trim|strip_tags',

		                   ],
		                   [
		                          'field' =>  'linkdien',
		                          'label' =>  'Linkdien',
		                           'rules' =>  'required|trim|strip_tags',

		                   ],
		                   [
		                          'field' =>  'phone',
		                          'label' =>  'Phone Number',
		                           'rules' =>  'required|trim|strip_tags',

		                   ],
          ],

          'social_accounts' => [
           
		                   [
		                          'field' =>  'facebook',
		                          'label' =>  'Facebook',
		                           'rules' =>  'required|trim|strip_tags',

		                   ],
		                    [
		                          'field' =>  'twitter',
		                          'label' =>  'Twitter',
		                           'rules' =>  'required|trim|strip_tags',

		                   ],
		                    [
		                          'field' =>  'youtube',
		                          'label' =>  'Youtube',
		                           'rules' =>  'required|trim|strip_tags',

		                   ],
          ],
           'languages' => [
           
		                   [
		                          'field' =>  'languages_name',
		                          'label' =>  'Languages Name',
		                           'rules' =>  'required|trim|strip_tags',

		                   ],
          ],

          'languages_web' => [
           
		                   [
		                          'field' =>  'languages_name',
		                          'label' =>  'Languages Name',
		                           'rules' =>  'required|trim|strip_tags',

		                   ],
          ],

              'industries' => [
               
			                   [
			                          'field' =>  'industries_name',
			                          'label' =>  'Industries',
			                           'rules' =>  'required|trim|strip_tags',

			                   ],
              ],

           'language' => [
	                           
							                   [
							                          'field' =>  'language',
							                          'label' =>  'Language Proficiency',
							                           'rules' =>  'required|trim|strip_tags',

							                   ],
	                          ],

      'video_webpage' => [
       
	                   [
	                          'field' =>  'video',
	                          'label' =>  'Persoanl Video',
	                           'rules' =>  'required|trim|strip_tags',

	                   ],
	                   [
	                          'field' =>  'webpage',
	                          'label' =>  'Persoanl Webpage',
	                           'rules' =>  'required|trim|strip_tags',

	                   ],
                    ],


 'employment_histry' => [
       
	                   [
	                          'field' =>  'start',
	                          'label' =>  'From ',
	                           'rules' =>  'required|trim|strip_tags',

	                   ],
	                     [
	                          'field' =>  'end',
	                          'label' =>  'To ',
	                           'rules' =>  'required|trim|strip_tags',

	                   ],
	                     [
	                          'field' =>  'company_name',
	                          'label' =>  'Company Name ',
	                           'rules' =>  'required|trim|strip_tags',

	                   ],
	                     [
	                          'field' =>  'role',
	                          'label' =>  'Role ',
	                           'rules' =>  'required|trim|strip_tags',

	                   ],
      ],

   'update_experience' => [
           
		                   [
		                          'field' =>  'experience_id',
		                          'label' =>  'Experience',
		                           'rules' =>  'required|trim|strip_tags',

		                   ],
                      ],

   'update_image' => [
           
		                   [
		                          'field' =>  'image',
		                          'label' =>  'Upload Photo:',
		                          'rules' =>  'callback_profile_img_validation',


		                   ],
                      ],
   'gallery' => [

       [
              'field' =>  'name',
              'label' =>  'Name',
             'rules' =>  'required|trim|strip_tags',
       ],
       [
              'field' =>  'image',
              'label' =>  'Upload Photo:',
              'rules' =>  'callback_img_validation',
       ],
  ],


    'education' => [

       [
              'field' =>  'start',
              'label' =>  'Start',
               'rules' =>  'required|trim|strip_tags',

       ],
          [
              'field' =>  'end',
              'label' =>  'End',
               'rules' =>  'required|trim|strip_tags',

       ],
       [
              'field' =>  'institute_name',
              'label' =>  'Institute Name',
               'rules' =>  'required|trim|strip_tags',

       ],
       [
              'field' =>  'area_of_study',
              'label' =>  'Area Of Study',
               'rules' =>  'required|trim|strip_tags',

       ],
       [
              'field' =>  'degree_type',
              'label' =>  'Degree Type',
               'rules' =>  'required|trim|strip_tags',

       ],
      
  ],


   'about' => [
           
		                   [
		                          'field' =>  'about_us',
		                          'label' =>  'About Us',
		                           'rules' =>  'required|trim|strip_tags',

		                   ],
                      ],
 'certificates' => [

   [
          'field' =>  'start',
          'label' =>  'From',
           'rules' =>  'required|trim|strip_tags',

   ],
    [
          'field' =>  'end',
          'label' =>  'To',
           'rules' =>  'required|trim|strip_tags',

   ],
    [
          'field' =>  'certificate_name',
          'label' =>  'Certificate Name',
           'rules' =>  'required|trim|strip_tags',

   ],
    [
          'field' =>  'organization',
          'label' =>  'Organization',
           'rules' =>  'required|trim|strip_tags',

   ],
    [
          'field' =>  'license_number',
          'label' =>  'License Number',
          'rules' =>  'required|trim|strip_tags',

   ],
    [
          'field' =>  'certificate_url',
          'label' =>  'Certificate URL',
          'rules' =>  'required|trim|strip_tags',

   ],
    
],

  'expertise_web' => [

       [
              'field' =>  'expertise_id[]',
              'label' =>  'Select Expertise:',
               'rules' =>  'required|trim|strip_tags',

       ],
  ],

   'skills_web' => [

       [
              'field' =>  'skills_id[]',
              'label' =>  'Select Skills:',
               'rules' =>  'required|trim|strip_tags',

       ],
  ],



   'industries_web' => [

       [
              'field' =>  'industries_id[]',
              'label' =>  'Select Industries:',
               'rules' =>  'required|trim|strip_tags',

       ],
  ],
              'experience' => [
           
		                   [
		                          'field' =>  'experience',
		                          'label' =>  'Experience',
		                           'rules' =>  'required|trim|strip_tags',

		                   ],
                        ],

	   'portfolio' => [
	                           
							                   [
							                          'field' =>  'name',
							                          'label' =>  'Portfolio Name',
							                           'rules' =>  'required|trim|strip_tags',

							                   ],
							                   [
                                                      'field' => 'portfolio',
                                                      'label' => 'Portfolio',
                                                       'rules' => 'callback_portfolio_img_validation',



							                   ],


	                ],
     'expertise' => [
	                           
							                   [
							                          'field' =>  'expertise_name',
							                          'label' =>  'Areas Of Expertise',
							                           'rules' =>  'required|trim|strip_tags',

							                   ],
	                          ],
	  'skills' => [
	                           
							                   [
							                          'field' =>  'skills_name',
							                          'label' =>  'Skills',
							                           'rules' =>  'required|trim|strip_tags',

							                   ],
	                  ],



                     'news' =>[
                                                [
							                          'field' =>  'news_title',
							                          'label' =>  'News Title',
							                          'rules' =>  'required|trim|strip_tags',

							                   ],
                                                 [
							                          'field' =>  'news_detail',
							                          'label' =>  'News Description',
							                          'rules' =>  'required|trim|strip_tags',

							                   ],
                                               [
							                          'field' =>  'category_id',
							                          'label' =>  'Category',
							                          'rules' =>  'required|trim|strip_tags',

							                   ],
							                   [
							                          'field' =>  'news_image',
							                          'label' =>  'News Image',
							                          'rules' =>  'callback_news_img_validation',

							                   ],
							                  


                                   ],
                  'team' =>[
					                            [
							                          'field' =>  'name',
							                          'label' =>  'Team Name',
							                          'rules' =>  'required|trim|strip_tags',

							                   ],
					                             [
							                          'field' =>  'designation',
							                          'label' =>  'Team Designation',
							                          'rules' =>  'required|trim|strip_tags',

							                   ],
					                         [
							                          'field' =>  'details',
							                          'label' =>  'Team Details',
							                          'rules' =>  'required|trim|strip_tags',

							                   ],
							                   [
							                          'field' =>  'image',
							                          'label' =>  'Team Image',
							                          'rules' =>  'callback_team_img_validation',

							                   ],
                        ],    
            ];





 ?>