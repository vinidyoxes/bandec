<?php

global $indeed_db;

if ( !isset( $affiliate_id ) ){

		$affiliate_id = $data['affiliate_id'];

}

if ( !isset( $affiliate_avatar ) ){

	  $affiliateuid = $indeed_db->get_uid_by_affiliate_id($affiliate_id);

		$affiliate_avatar = uap_get_avatar_for_uid( $affiliateuid );

}

if ( !isset( $affiliate_full_name ) ){

		$affiliate_full_name = $indeed_db->get_full_name_of_user($affiliate_id);

}

?>

<div class="uap-stuffbox">

	<h3 class="uap-h3"><?php echo esc_html__('Display MLM Matrix');?></h3>

	<div class="inside">



	<?php if (!empty($data['items']) || !empty($data['parent'])):?>

		<?php

				if ( !isset( $data['parent_id'] ) ){

						$data['parent_id'] = '';

				}

				if ( !isset( $data['parent_avatar'] ) ){

						$data['parent_avatar'] = '';

				}

				if ( !isset( $data['parent_full_name'] ) ){

						$data['parent_full_name'] = '';

				}

				wp_enqueue_script( 'gstatic-loader', 'https://www.gstatic.com/charts/loader.js', ['jquery'], false );

		?>



		<span class="uap-js-mlm-view-affiliate-children-parent-data"

					data-parent_id='<?php echo $data['parent_id'];?>'

					data-parent_avatar="<?php echo $data['parent_avatar'];?>"

					data-parent_full_name="<?php echo $data['parent_full_name'];?>"

					data-parent="<?php echo $data['parent'];?>"

		></span>



		<span class="uap-js-mlm-view-affiliate-data"

					data-affiliate_id='<?php echo $affiliate_id;?>'

					data-affiliate_avatar="<?php echo $affiliate_avatar;?>"

					data-parent_full_name="<?php echo $affiliate_full_name;?>"

		></span>



		<?php if ( !empty( $data['items'] ) ):?>

			<?php foreach ( $data['items'] as $item ):?>

					<span class="uap-js-mlm-view-affiliate-children-data"

								data-avatar="<?php echo $item['avatar'];?>"

								data-full_name="<?php echo $item['full_name'];?>"

								data-amount="<?php echo $item['amount_value'] . ' rewards';?>"

								data-id="<?php echo $item['id'];?>"

								data-parent_id="<?php echo $item['parent_id'];?>"

					></span>

			<?php endforeach;?>

		<?php endif;?>

   <div id="uap_mlm_chart"></div>


			<table class="uap-dashboard-inside-table">
				<div class="table_span">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="icon bi bi-exclamation" viewBox="0 0 16 16" style="color: red; position: relative; top: 3px;">
  				<path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.553.553 0 0 1-1.1 0L7.1 4.995z" style=""/>
				</svg>
					<span>Atenção! A remuneração de 8% de indicação direta já ocorre na hora da compra</span>
				</div>
				<tbody>

					<tr>

						<th><?php esc_html_e('Subaffiliate', 'uap');?></th>

						<th><?php esc_html_e('Level', 'uap');?></th>

						<th><?php esc_html_e('Amount', 'uap');?></th>

					</tr>

					<?php foreach ($data['items'] as $item):?>

					<tr>

						<td><?php echo $item['username'];?></td>

						<td><?php echo $item['level'];?></td>

						<td>2,5%</td>

					</tr>

					<?php endforeach;?>

				</tbody>

			</table>

		<?php else : ?>

			<?php esc_html_e('Current Affiliate user has no other sub-affiliates into his MLM Matrix on this moment', 'uap');?>

		<?php endif;?>



	</div>

</div>

