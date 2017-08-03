<div class="mjm_clinic_patient_name-meta">
    <label for="mjm_clinic_patient_name">
        <strong><?php echo __( 'Patient Name:', 'mjm-clinic' ) ?></strong>
    </label>

    <input class="widefat"
           id="mjm_clinic_patient_name"
           name="mjm_clinic_patient_name"
           value="<?php echo wp_strip_all_tags( get_post_meta( $post->ID, 'mjm_clinic_patient_name', true ), true )?>"
           type="text" />
</div>

