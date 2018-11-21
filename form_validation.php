<?php 
$config = array(
                 'profile' => array(
                                    array(
                                            'field' => 'name',
                                            'label' => 'Name',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'email',
                                            'label' => 'Email id',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'title',
                                            'label' => 'Title',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'website',
                                            'label' => 'Website',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'country_id',
                                            'label' => 'Country',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'city_id',
                                            'label' => 'City',
                                            'rules' => 'required|min_length[1]|greater_than_equal_to[1]'
                                         ),
                                    array(
                                            'field' => 'website',
                                            'label' => 'Website',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'description',
                                            'label' => 'Description',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'contact',
                                            'label' => 'Contact Number',
                                            'rules' => 'required'
                                         )
                                    ),
                 'email' => array(
                                    array(
                                            'field' => 'emailaddress',
                                            'label' => 'EmailAddress',
                                            'rules' => 'required|valid_email'
                                         ),
                                    array(
                                            'field' => 'name',
                                            'label' => 'Name',
                                            'rules' => 'required|alpha'
                                         ),
                                    array(
                                            'field' => 'title',
                                            'label' => 'Title',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'message',
                                            'label' => 'MessageBody',
                                            'rules' => 'required'
                                         )
                                    )                          
               );