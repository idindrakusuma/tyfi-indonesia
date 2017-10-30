    /*!

 =========================================================
 * Paper Bootstrap Wizard - v1.0.2
 =========================================================

 * Product Page: https://www.creative-tim.com/product/paper-bootstrap-wizard
 * Copyright 2017 Creative Tim (http://www.creative-tim.com)
 * Licensed under MIT (https://github.com/creativetimofficial/paper-bootstrap-wizard/blob/master/LICENSE.md)

 =========================================================

 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 */



// Paper Bootstrap Wizard Functions

searchVisible = 0;
transparent = true;

        $(document).ready(function(){

            /*  Activate the tooltips      */
            $('[rel="tooltip"]').tooltip();

            // Code for the Validator
            var $validator = $('.wizard-card form').validate({
        		  rules: {
        		    nama: {
        		      required: true,
        		      minlength: 3
        		    },
        		    jumlah: {
        		      required: true,
                      number:true,
        		      min:2,
                      max:5
        		    },
        		    email: {
        		      required: true,
                      customemail:true
        		    },
                    hp: {
                      required: true,
                      number:true,
                      minlength:10,
                      maxlength:13
                    },
                    tanggal_lahir: {
                        required:true,
                        date:true,
                        minlength:10
                    },
                    alamat:{
                        required:true,
                        minlength:10
                    },
                    //organisasi
                    asal_organisasi: {
                      required: true,
                      minlength:3
                    },
                    alamat_organisasi: {
                      required: true,
                      minlength:10
                    },
                    pelayanan: {
                      required: true,
                      minlength:5
                    }


                },
        	});
            //validate emaiil
            jQuery.validator.addMethod("customemail", function(value, element) {
                return this.optional(element) ||/^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/.test(value);
                }, "Tolong masukan Email yang valid..");


            //custom pesan
            $('input[type="text"]').each(function() {
                $(this).rules('add', {
                    messages: {
                        required: "Pertanyaan ini wajib diisi..",
                        minlength: "Data terlalu singkat..",
                        maxlength: "Data terlalu banyak..",
                        number: "Format nomor tidak sesuai..",
                        date:"Tolong masukan tanggal lahir yang sesuai..",
                        email: "Tolong masukan email yang benar..",
                        min:"Silahkan masukan lebih dari sama dengan 2",
                        max:"Silahkan masukan kurang dari sama dengan 5"
                    }
                })
            });

            $('textarea').each(function() {
                $(this).rules('add', {
                    messages: {
                        required: "Pertanyaan ini wajib diisi..",
                        minlength: "Data terlalu singkat.."
                    }
                })
            });
            // Wizard Initialization
          	$('.wizard-card').bootstrapWizard({
                'tabClass': 'nav nav-pills',
                'nextSelector': '.btn-next',
                'previousSelector': '.btn-previous',

                onNext: function(tab, navigation, index) {
                	var $valid = $('.wizard-card form').valid();
                	if(!$valid) {
                		$validator.focusInvalid();
                		return false;
                	}
                },

                onInit : function(tab, navigation, index){

                  //check number of tabs and fill the entire row
                  var $total = navigation.find('li').length;
                  $width = 100/$total;

                  navigation.find('li').css('width',$width + '%');

                },

                onTabClick : function(tab, navigation, index){

                    var $valid = $('.wizard-card form').valid();

                    if(!$valid){
                        return false;
                    } else{
                        return true;
                    }

                },

                onTabShow: function(tab, navigation, index) {
                    var $total = navigation.find('li').length;
                    var $current = index+1;

                    var $wizard = navigation.closest('.wizard-card');

                    // If it's the last tab then hide the last button and show the finish instead
                    if($current >= $total) {
                        $($wizard).find('.btn-next').hide();
                        $($wizard).find('.btn-finish').show();
                    } else {
                        $($wizard).find('.btn-next').show();
                        $($wizard).find('.btn-finish').hide();
                    }

                    //update progress
                    var move_distance = 100 / $total;
                    move_distance = move_distance * (index) + move_distance / 2;

                    $wizard.find($('.progress-bar')).css({width: move_distance + '%'});
                    //e.relatedTarget // previous tab

                    $wizard.find($('.wizard-card .nav-pills li.active a .icon-circle')).addClass('checked');

                }
	        });


                // Prepare the preview for profile picture
                $("#wizard-picture").change(function(){
                    readURL(this);
                });

                $('[data-toggle="wizard-radio"]').click(function(){
                    wizard = $(this).closest('.wizard-card');
                    wizard.find('[data-toggle="wizard-radio"]').removeClass('active');
                    $(this).addClass('active');
                    $(wizard).find('[type="radio"]').removeAttr('checked');
                    $(this).find('[type="radio"]').attr('checked','true');
                });

                $('[data-toggle="wizard-checkbox"]').click(function(){
                    if( $(this).hasClass('active')){
                        $(this).removeClass('active');
                        $(this).find('[type="checkbox"]').removeAttr('checked');
                    } else {
                        $(this).addClass('active');
                        $(this).find('[type="checkbox"]').attr('checked','true');
                    }
                });

                $('.set-full-height').css('height', 'auto');

            });



         //Function to show image before upload

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

 /*ATURAN GRUP*/

$(document).ready(function(){

 $('#jenis_peserta').on('change',function(){
    var selection = $(this).val();
    switch(selection){
    case '2':
        $("#if_grup").show()
        break;
    default:
        $("#if_grup").hide()
    }
});


$('.datepicker').datepicker({
     format: 'yyyy-mm-dd',
     endDate: '2005-01-01' //set maksimal tanggalnya
 });


    //Bind this keypress function to all of the input tags
            $("input").keypress(function (evt) {
            //Deterime where our character code is coming from within the event
            var charCode = evt.charCode || evt.keyCode;
            if (charCode  == 13) { //Enter key's keycode
                    return false;
                }
            });
});
