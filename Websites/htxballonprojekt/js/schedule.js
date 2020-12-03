$(document).ready(function() {
                  $('#add1').click(function(e) { // Button which will activate our modal
                                  $('#modal1').reveal({ // The item which will be opened with reveal
                                                     animation: 'fade',                   // fade, fadeAndPop, none
                                                     animationspeed: 600,                       // how fast animtions are
                                                     closeonbackgroundclick: true,              // if you click background will modal close?
                                                     dismissmodalclass: 'close1'    // the class of a button or element that will close an open modal
                                                     });
                                  return false;
                                  });
                  
                  $('.click').click(function() {
                                    $('#text' + window.id).animate({
                                                                      opacity: 0.0,
                                                                      height: '0px',
                                                                      //width: '300px',
                                                                      }, 500, 'linear'
                                                                      );
                                       //$('#text' + window.id).css('display', 'none');
                                       $('#delete' + window.id).css('display', 'none');
                                       $('#save' + window.id).css('display', 'none');
                                       $('.click').css('display', 'inline-block');
                                       $('.' + window.id).attr('readonly', true);
                                       $('.' + window.id).attr('disabled', true);
									
									window.id = $(this).attr('id');
                                    
                                    $('.' + window.id).attr('readonly', false);
                                    $('.' + window.id).attr('disabled', false);
                                    $(this).css('display', 'none');
                                    $('#save' + window.id).css('display', 'inline-block');
                                    $('#delete' + window.id).css('display', 'inline-block');
                                    $('#text' + window.id).animate({
                                                                   opacity: 1.0,
                                                                   height: '212.5px',
                                                                   }, 500, 'linear'
                                                                   );
                                    
                                    });
                  
                  $(document).click(function(event) {
                                       
									   var target = event.target;
									   
									   if(!$(target).is('.out') && !$(target).parents().is('.out')) {
										   $('#text' + window.id).animate({
																		  opacity: 0.0,
																		  height: '0px',
																		  //width: '300px',
																		  }, 500, 'linear'
																		  );
										   //$('#text' + window.id).css('display', 'none');
										   $('#delete' + window.id).css('display', 'none');
										   $('#save' + window.id).css('display', 'none');
										   $('.click').css('display', 'inline-block');
										   $('.' + window.id).attr('readonly', true);
										   $('.' + window.id).attr('disabled', true);
                                       }
                                       });
                  });