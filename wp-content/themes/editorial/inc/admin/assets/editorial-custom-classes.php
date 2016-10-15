<?php
/**
 * Define customizer Custom calsses
 *
 * @package Editorial
 * 
 */

if ( class_exists( 'WP_Customize_Control' ) ) {
    
    class Editorial_Customize_Category_Control extends WP_Customize_Control {
        /**
         * Render the control's content.
         *
         * @since 3.4.0
         */
        public function render_content() {
            $dropdown = wp_dropdown_categories(
                array(
                    'name'              => '_customize-dropdown-categories-' . $this->id,
                    'echo'              => 0,
                    'show_option_none'  => __( '&mdash; Select Category &mdash;', 'editorial' ),
                    'option_none_value' => '',
                    'selected'          => $this->value(),
                )
            );
 
            // Hackily add in the data link parameter.
            $dropdown = str_replace( '<select', '<select ' . $this->get_link(), $dropdown );
 
            printf(
                '<label class="customize-control-select"><span class="customize-control-title">%s</span><span class="description customize-control-description">%s</span> %s </label>',
                $this->label,
                $this->description,
                $dropdown
            );
        }
    }

    /**
     * Image control by radtion button 
     */
    class Editorial_Image_Radio_Control extends WP_Customize_Control {

        public function render_content() {

            if ( empty( $this->choices ) )
                return;

            $name = '_customize-radio-' . $this->id;

            ?>
            <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
            <span class="description customize-control-description"><?php echo esc_html( $this->description ); ?></span>
            <ul class="controls" id ="editorial-img-container">
            <?php
                foreach ( $this->choices as $value => $label ) :
                    $class = ($this->value() == $value)?'editorial-radio-img-selected editorial-radio-img-img':'travel-radio-img-img';
                    ?>
                    <li style="display: inline;">
                    <label>
                        <input <?php $this->link(); ?>style = 'display:none' type="radio" value="<?php echo esc_attr( $value ); ?>" name="<?php echo esc_attr( $name ); ?>" <?php $this->link(); checked( $this->value(), $value ); ?> />
                        <img src = '<?php echo esc_url( $label ); ?>' class = '<?php echo esc_attr( $class ); ?>' />
                    </label>
                    </li>
                    <?php
                endforeach;
            ?>
            </ul>
            <?php
        }
    }

    /**
     * Cutomize control for switch option
     */    
    class Editorial_Customize_Switch_Control extends WP_Customize_Control {
        public $type = 'switch';    
        public function render_content() {
    ?>
            <label>
                <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                <div class="description customize-control-description"><?php echo esc_html( $this->description ); ?></div>
                <div class="switch_options">
                    <?php 
                        $show_choices = $this->choices;
                        foreach ( $show_choices as $key => $value ) {
                            echo '<span class="switch_part '.$key.'" data-switch="'.$key.'">'. $value.'</span>';
                        }
                    ?>
                    <input type="hidden" id="enable_switch_option" <?php $this->link(); ?> value="<?php echo $this->value(); ?>" />
                </div>
            </label>
    <?php
        }
    }

}