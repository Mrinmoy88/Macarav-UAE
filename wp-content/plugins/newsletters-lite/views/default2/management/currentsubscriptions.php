<?php // phpcs:ignoreFile ?>
<?php
	
$paymentmethod = $this -> get_option('paymentmethod');    
$managementshowprivate = $this -> get_option('managementshowprivate');
	
?>

<h3><?php esc_html_e('Current Subscriptions', 'wp-mailinglist'); ?></h3>

<?php if (!empty($errors)) : ?>
    <?php $this -> render('error', array('errors' => $errors), true, 'default'); ?>
<?php endif; ?>

<?php if (!empty($success) && $success == true) : ?>
    <div class="alert alert-success">
		<i class="fa fa-check"></i> <?php echo wp_kses_post($success); ?>
    </div>
<?php endif; ?>
<?php if (!empty($subscriber -> subscriptions)) : ?>    
    <p><?php esc_html_e('Below are your current subscriptions to our list(s).', 'wp-mailinglist'); ?><br/>
    <?php esc_html_e('An Active status indicates that you will receive emails on that list.', 'wp-mailinglist'); ?></p>

    <table class="table table-striped">
        <tbody>
            <?php $intervals = $this -> get_option('intervals'); ?>
            <?php foreach ($subscriber -> subscriptions as $subscription) : ?>
                <?php if (empty($subscription -> mailinglist -> privatelist) || !empty($managementshowprivate) || $subscription -> mailinglist -> privatelist != "Y") : ?>
	            	<tr id="currentsubscription<?php echo esc_html( $subscription -> mailinglist -> id); ?>">
                        <td>
	                    	<label for="mailinglists<?php echo esc_html( $subscription -> mailinglist -> id); ?>"><?php echo esc_html($subscription -> mailinglist -> title); ?></label>
                            <?php if ($subscription -> mailinglist -> paid == "Y") : ?>
                                <div>
                                    <small>
                                        <span class="wpmlcustomfieldcaption"><?php echo $Html -> currency() . '' . number_format($subscription -> mailinglist -> price, 2, '.', '') . ' ' . $intervals[$subscription -> mailinglist -> interval]; ?></span>
                                        <?php if ($subscription -> mailinglist -> paid == "Y" && $subscription -> active == "Y") : ?>
                                            <?php $expiresdate = (!empty($subscription -> mailinglist -> interval) && $subscription -> mailinglist -> interval != "once") ? $Html -> gen_date(false, strtotime($Mailinglist -> gen_expiration_date($subscriber -> id, $subscription -> mailinglist -> id))) : __('Never', 'wp-mailinglist'); ?>
				                        	<div><span class="wpmlcustomfieldcaption"><?php esc_html_e('Expires:', 'wp-mailinglist'); ?> <strong><?php echo esc_html( $expiresdate); ?></strong></span></div>
                                            <?php if (!empty($subscription -> mailinglist -> maxperinterval)) : ?>
                                                <span class="wpmlcustomfieldcaption"><?php echo sprintf(__('%s out of %s sent', 'wp-mailinglist'), $subscription -> paid_sent, $subscription -> mailinglist -> maxperinterval); ?></span>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </small>
                                </div>
                            <?php endif; ?>
                        </td>
	                    <td><label for="mailinglists<?php echo esc_html( $subscription -> mailinglist -> id); ?>"><?php echo ($subscription -> active == "Y") ? '<span class="newsletters_success">' . __('Active', 'wp-mailinglist') . '</span>' : '<span class="newsletters_error">' . __('Inactive', 'wp-mailinglist') . '</span>'; ?></label></td>
                        <td>
	                    	<span id="activatelink<?php echo esc_html( $subscription -> mailinglist -> id); ?>">
                            <?php if ($subscription -> active == "Y") : ?>
	                        	<a href="" class="newsletters_button btn btn-danger remove_button" data-mailinglist-id="<?php echo esc_html( $subscription -> mailinglist -> id); ?>" onclick="remove_subscription('<?php echo esc_html( $subscriber -> id); ?>','<?php echo esc_html( $subscription -> mailinglist -> id); ?>','N'); return false;"><?php esc_html_e('Remove', 'wp-mailinglist'); ?></a>
                                <?php if (!empty($subscription -> mailinglist -> paid) && $subscription -> mailinglist -> paid == "Y") : ?>
	                        		<form action="<?php echo esc_url_raw($Html -> retainquery('method=paidsubscription', $this -> get_managementpost(true, false, false))); ?>" method="post" id="paidsubscription_<?php echo esc_html( $subscription -> mailinglist -> id); ?>">
                                        <input type="hidden" name="extend" value="1" />
                                        <input type="hidden" name="subscriber_id" value="<?php echo esc_attr(wp_unslash($subscriber -> id)); ?>" />
                                        <input type="hidden" name="list_id" value="<?php echo esc_attr(wp_unslash($subscription -> mailinglist -> id)); ?>" />
                                        <button value="1" type="submit" class="btn btn-success" name="pay">
		                        			<?php esc_html_e('Extend', 'wp-mailinglist'); ?>
                                        </button>
                                    </form>
                                <?php endif; ?>
                            <?php else : ?>
                                <?php if (!empty($subscription -> mailinglist -> paid) && $subscription -> mailinglist -> paid == "Y") : ?>
                                    <?php if (!empty($paymentmethod)) : ?>
		                        		<form class="float-left my-0 py-0 mr-1" action="<?php echo esc_url_raw($Html -> retainquery('method=paidsubscription', $this -> get_managementpost(true, false, false))); ?>" method="post" id="paidsubscription_<?php echo esc_html( $subscription -> mailinglist -> id); ?>">
                                            <input type="hidden" name="extend" value="0" />
                                            <input type="hidden" name="subscriber_id" value="<?php echo esc_attr(wp_unslash($subscriber -> id)); ?>" />
                                            <input type="hidden" name="list_id" value="<?php echo esc_attr(wp_unslash($subscription -> mailinglist -> id)); ?>" />
                                            <button value="1" type="submit" class="btn btn-success" name="pay">
			                        			<?php esc_html_e('Pay Now', 'wp-mailinglist'); ?>
                                            </button>
                                        </form>
                                    <?php endif; ?>
                                <?php else : ?>
	                        		<a href="javascript:newsletters_management_activate('<?php echo esc_html( $subscriber -> id); ?>','<?php echo esc_html( $subscription -> mailinglist -> id); ?>','Y');" onclick="if (!confirm('<?php esc_html_e('Are you sure you want to activate this subscription?', 'wp-mailinglist'); ?>')) { return false; }" class="<?php echo esc_html($this -> pre); ?>button activatebutton btn btn-success"><?php esc_html_e('Activate', 'wp-mailinglist'); ?></a>
                                <?php endif; ?>
                                <a href="#" data-mailinglist-id="<?php echo esc_html( $subscription -> mailinglist -> id); ?>" onclick="javascript:remove_subscription('<?php echo esc_html( $subscriber -> id); ?>','<?php echo esc_html( $subscription -> mailinglist -> id); ?>','N');" class="newsletters_button btn btn-danger" ><?php esc_html_e('Remove', 'wp-mailinglist'); ?></a>
                            <?php endif; ?>
                            </span>
                        </td>
                    </tr>
                    <?php $subscribedlists[] = $subscription -> mailinglist -> id; ?>
                <?php endif; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
    
    <!-- Unsubscribe Dialog -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button value="1" type="button" class="close unsubscribe-x-button-modal" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel"><?php esc_html_e('Confirm Unsubscribe', 'wp-mailinglist'); ?></h4>
                </div>
                <div class="modal-body">
                    <form action="" method="" id="unsubscribe-form">
                        <p>
						    <label for="unsubscribe_comments"><?php esc_html_e('Comments (optional)', 'wp-mailinglist'); ?></label>
                            <textarea name="unsubscribe_comments" class="form-control" style="width:100%;" cols="100%" rows="4" id="unsubscribe_comments"></textarea>
                        </p>
                        
                        <input type="hidden" name="unsubscribe_subscriber_id" id="unsubscribe_subscriber_id" value="<?php echo esc_attr($subscriber -> id); ?>" />
                        <input type="hidden" name="unsubscribe_list_id" id="unsubscribe_list_id" value="" />
                        <input type="hidden" name="unsubscribe_status" id="unsubscribe_status" value="N" />
                    </form>
                </div>
                <div class="modal-footer">
					<button value="1" type="button" class="btn btn-secondary" data-dismiss="modal"><?php esc_html_e('Cancel', 'wp-mailinglist'); ?></button>
					<button value="1" type="button" class="btn btn-danger" onclick="submit_unsubscription(); return false;"><?php esc_html_e('Unsubscribe', 'wp-mailinglist'); ?></button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Remove All Dialog -->
    <div class="modal fade" id="removeAllModal" tabindex="-1" role="dialog" aria-labelledby="removeAllModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button value="1" type="button" class="close removeall-x-button-modal" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="removeAllModalLabel"><?php _e('Confirm Unsubscribes', 'wp-mailinglist'); ?></h4>
                </div>
                <div class="modal-body">
                    <form action="" method="" id="removeall-form">
                        <p>
                            <label for="removeall_comments"><?php _e('Comments (optional)', 'wp-mailinglist'); ?></label>
                            <textarea name="removeall_comments" class="form-control" style="width:100%;" cols="100%" rows="4" id="removeall_comments"></textarea>
                        </p>
                        <p>
                            <input type="checkbox" name="removeall_paid_inactive" id="removeall_paid_inactive"  />
                            <label for="removeall_paid_inactive"><?php _e('Remove paid and inactive lists', 'wp-mailinglist'); ?></label>
                        </p>
                        
                        <input type="hidden" name="removeall_subscriber_id" id="removeall_subscriber_id" value="<?php echo esc_attr($subscriber -> id); ?>" />
                        <input type="hidden" name="removeall_status" id="removeall_status" value="N" />
                    </form>
                </div>
                <div class="modal-footer">
                    <button value="1" type="button" class="btn btn-secondary" data-dismiss="modal"><?php _e('Cancel', 'wp-mailinglist'); ?></button>
                    <button value="1" type="button" class="btn btn-danger" onclick="submit_removeall(); return false;"><?php _e('Remove All', 'wp-mailinglist'); ?></button>
                </div>
            </div>
        </div>
    </div>
    
    <a href="#" class="btn btn-danger" id="remove_all_subscriptions"><?php esc_html_e('Remove All', 'wp-mailinglist'); ?></a>

    <script type="text/javascript">
        <?php $unsubscribecomments = $this -> get_option('unsubscribecomments'); ?> 
        var unsubscribecomments = <?php echo (!empty($unsubscribecomments) && $unsubscribecomments == "Y") ? "true" : "false"; ?>; 
        
        function remove_subscription(subscriber_id, list_id, status) { 
            if (unsubscribecomments == true) { 
                jQuery('#myModal').modal('show'); 
                jQuery('#unsubscribe_subscriber_id').val(subscriber_id); 
                jQuery('#unsubscribe_list_id').val(list_id); 
                jQuery('#unsubscribe_status').val("N"); 
            } else { 
			    if (confirm('<?php esc_html_e('Are you sure you want to remove this subscription?', 'wp-mailinglist'); ?>')) {
                    newsletters_management_activate(subscriber_id, list_id, status); 
                }
            }
        }
        
        function submit_unsubscription() {
            unsubscribe_comments = jQuery('#unsubscribe_comments').val(); 
			var subscriber_id = '<?php echo esc_html( $subscriber -> id); ?>';
            var list_id = jQuery('#unsubscribe_list_id').val(); 
            var status = "N";
            jQuery('#myModal').modal('hide');
            newsletters_management_activate(subscriber_id, list_id, status); 
            jQuery('#unsubscribe_comments').val(""); 
        }

        jQuery('#remove_all_subscriptions').on('click', function(e) {
		    e.preventDefault();
		    jQuery('#removeAllModal').modal('show');
		});

		function submit_removeall() {
		    var subscriber_id = '<?php echo esc_html( $subscriber -> id); ?>';
		    var remove_paid_inactive = jQuery('#removeall_paid_inactive').is(':checked');
		    var elems;

		    if (remove_paid_inactive) {
		        elems = document.querySelectorAll('.newsletters_button.btn.btn-danger');
		    } else {
		        elems = document.querySelectorAll('.remove_button');
		    }

		    var arr = [];
		    for (var i = elems.length; i--;) {
		        arr.push(elems[i].getAttribute('data-mailinglist-id'));
		    }

		    var status = "N";
		    jQuery('#removeAllModal').modal('hide');
		    arr.forEach(function(item) {
		        newsletters_management_activate(subscriber_id, item, status);
		    });
		    jQuery('#removeall_comments').val("");
		}

		jQuery('.modal-header .close, .modal-footer .btn-secondary').on('click', function(e) {
		    jQuery('#myModal, #removeAllModal').modal('hide'); 
		});
		
    </script>
<?php else : ?>
    <div class="alert alert-danger">
		<i class="fa fa-exclamation-triangle"></i> <?php esc_html_e('You are not subscribed to any lists.', 'wp-mailinglist'); ?>
    </div>
<?php endif; ?>
