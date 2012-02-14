<?php

// Load Billboards
$billboards = maybe_unserialize(get_option(UDS_BILLBOARD_OPTION, array()));

// safety check
if(! is_array($billboards)) {
	$billboards = array();
}

if(isset($billboards['_uds_temp_billboard'])) {
	unset($billboards['_uds_temp_billboard']);
}

// add 'button' class to header add new link
$link_class = 'add-new-h2';
if(version_compare(get_bloginfo('version'), '3.2', '<')) {
	$link_class .= ' button';
}

?>
<div class="wrap">
	<!-- Header -->
	<div id="icon-edit" class="icon32 icon32-posts-post"><br /></div>
	<?php  ?>
	<h2>uBillboard <a href="<?php echo admin_url('admin.php?page=uds_billboard_edit') ?>" class="<?php echo $link_class ?>"><?php _e('Add New', uds_billboard_textdomain) ?></a></h2>
	
	<!-- Billboards List -->
	<?php if(!empty($billboards)): ?>
		<!-- Bulk Actions -->
		<div class="tablenav top">
			<div class="alignleft actions">
				<select name="action">
					<option selected="selected" value="-1"><?php _e('Bulk Actions', uds_billboard_textdomain) ?></option>
					<option value="edit"><?php _e('Edit', uds_billboard_textdomain) ?></option>
					<option value="trash"><?php _e('Trash', uds_billboard_textdomain) ?></option>
				</select>
			</div>
		</div>
		<table class="wp-list-table widefat fixed billboards">
			<!-- Table Header -->
			<thead>
				<tr>
					<th id="cb" class="manage-column column-cb check-column" scope="col"><input type="checkbox" /></th>
					<th id="title"><?php _e('Billboard Name', uds_billboard_textdomain) ?></th>
					<th class="shortcode"><?php _e('Shortcode', uds_billboard_textdomain) ?></th>
				</tr>
			</thead>
			<!-- Table Footer -->
			<tfoot>
				<tr>
					<th id="cb" class="manage-column column-cb check-column" scope="col"><input type="checkbox" /></th>
					<th id="title"><?php _e('Billboard Name', uds_billboard_textdomain) ?> </th>
					<th class="shortcode"><?php _e('Shortcode', uds_billboard_textdomain) ?></th>
				</tr>
			</tfoot>
			<!-- Billboards -->
			<tbody id="the-list">
				<?php $n = 0; ?>
				<?php foreach($billboards as $key => $billboard): ?>
					<tr class="<?php echo $n % 2 == 0 ? 'alternate' : '' ?>">
						<th class="check-column" scope="row">
							<input type="checkbox" value="<?php echo $key ?>" name="billboard[]" />
						</th>
						<td>
							<strong>
								<a href="<?php echo admin_url('admin.php?page=uds_billboard_edit&uds-billboard-edit='.$key) ?>">
									<?php echo $billboard->name ?>
								</a>
							</strong>
							<div class="row-actions">
								<span class="edit">
									<a href="<?php echo admin_url('admin.php?page=uds_billboard_edit&uds-billboard-edit='.$key) ?>"><?php _e('Edit', uds_billboard_textdomain) ?></a> | 
								</span>
								<span class="preview-action">
									<a href="<?php echo admin_url('admin.php?page=uds_billboard_edit&uds-billboard-edit='.$key.'#preview') ?>"><?php _e('Preview', uds_billboard_textdomain) ?></a> | 
								</span>
								<span class="export">
									<a href="<?php echo admin_url('admin.php?page=uds_billboard_import_export&uds-billboard-export='.$key.'&download_export='.wp_create_nonce('uds-billboard-export')) ?>"><?php _e('Export', uds_billboard_textdomain) ?></a> | 
								</span>
								<span class="trash">
									<a href="<?php echo admin_url('admin.php?page=uds_billboard_admin&uds-billboard-delete='.$key.'&uds-billboard-delete-nonce='.wp_create_nonce('uds-billboard-delete-nonce')) ?>"><?php _e('Delete', uds_billboard_textdomain) ?></a>
								</span>
							</div>
						</td>
						<td class="shortcode">
							<?php echo "[uds-billboard name=\"{$billboard->name}\"]"?>
						</td>
					</tr>
					<?php $n++; ?>
				<?php endforeach; ?>
			</tbody>
		</table>
	<?php else: ?>
		<p><?php printf(__('There are no uBillboards defined yet. Create your first one %1$shere%2$s!', uds_billboard_textdomain), '<a href="'.admin_url('admin.php?page=uds_billboard_edit').'">', '</a>') ?></p>
	<?php endif; ?>
</div>