$(document).ready(function() {
				  
				  $('.click').click(function() {
                                    
                                    $(this).css('display', 'none');
                                    $('#save').css('display', 'inline-block');
                                    $('#delete').css('display', 'inline-block');
									$('.op2').attr('disabled', false);
									$('.user').attr('disabled', false);
									$('#log').attr('readonly', false);
                                    
                                    });
				  
                  window.id = $('.op2 option:selected').attr('id');
                  
                  if(window.id != 'first') {
                  $('.schedule').html(window.id);
                  }
                  
				  $('.op').change(function() {
								window.schedule = $('.op option:selected').attr('id');
									
                                  if(window.schedule == 'first') {
                                    $('.schedule').animate({
											opacity: 0.0,
											height: '0px',
										}, 400, 'linear', function() {
											
											$('.schedule').html(window.schedule);
											
                                    });
                                  } else {
                                  $('.schedule').animate({
                                                     opacity: 0.0,
                                                     }, 400, 'linear', function() {
                                                     
                                                     $('.schedule').html(window.schedule);
                                                     
                                                     });

                                  }
                                  
										if(window.schedule != 'first') {
											$('.schedule').animate({
													opacity: 1.0,
													height: '100px',
												}, 400, 'linear'
											);
										}
									});
					$('.op2').change(function() {
								window.schedule = $('.op2 option:selected').attr('id');
									
                                  if(window.schedule == 'first') {
                                    $('.schedule').animate({
											opacity: 0.0,
											height: '0px',
										}, 400, 'linear', function() {
											
											$('.schedule').html(window.schedule);
											
                                    });
                                  } else {
                                  $('.schedule').animate({
                                                     opacity: 0.0,
                                                     }, 400, 'linear', function() {
                                                     
                                                     $('.schedule').html(window.schedule);
                                                     
                                                     });

                                  }
                                  
										if(window.schedule != 'first') {
											$('.schedule').animate({
													opacity: 1.0,
													height: '100px',
												}, 400, 'linear'
											);
										}
									});		  
					$('.add2').click(function(e) { // Button which will activate our modal
									$('#modal2').reveal({ // The item which will be opened with reveal
														animation: 'fade',                   // fade, fadeAndPop, none
														animationspeed: 600,                       // how fast animtions are
														closeonbackgroundclick: true,              // if you click background will modal close?
														dismissmodalclass: 'close2'    // the class of a button or element that will close an open modal
														});
									
									return false;
									});
					});