<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCriticalPathsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('critical_paths', function (Blueprint $table) {
            $table->id();
            $table->integer('po_id')->nullable();
            $table->integer('brand_id')->nullable();
            $table->integer('department_id')->nullable();
            $table->string('season')->nullable();
            $table->string('image')->nullable();
            $table->string('fabric_type')->nullable();
            $table->string('block_repeat_initial')->nullable();
            $table->string('vendor')->nullable();
            $table->string('manufacture_unit')->nullable();
            $table->string('plm_number')->nullable();
            $table->string('purchase_order_number')->nullable();
            $table->string('style_no')->nullable();
            $table->string('order_qty')->nullable();
            $table->string('supplier_price_product_cost')->nullable();
            $table->string('total_value')->nullable();
            $table->string('style_description')->nullable();
            $table->string('care_label_date')->nullable();
            $table->string('colour')->nullable();
            $table->string('fabric_ref')->nullable();
            $table->string('fabric_content')->nullable();
            $table->string('fabric_weight')->nullable();
            $table->string('fabric_mill')->nullable();
            $table->string('lead_times')->nullable();
            $table->string('treated_as_priority_order')->nullable();
            $table->string('official_po_sent_plan_date')->nullable();
            $table->string('official_po_sent_actual_date')->nullable();
            $table->string('colour_std_print_artwork_sent_to_supplier_plan_date')->nullable();
            $table->string('lab_dip_approval_plan_date')->nullable();
            $table->string('lab_dip_approval_actual_date')->nullable();
            $table->string('lab_dip_dispatch_details')->nullable();
            $table->string('lab_dip_image')->nullable();
            $table->string('embellishment_s_o_approval_plan_date')->nullable();
            $table->string('embellishment_s_o_approval_actual_date')->nullable();
            $table->string('embellishment_s_o_dispatch_details')->nullable();
            $table->string('embellishment_s_o_image')->nullable();
            $table->string('fabric_ordered_plan_date')->nullable();
            $table->string('fabric_ordered_actual_date')->nullable();
            $table->string('bulk_fabric_knit_down_approval_plan_date')->nullable();
            $table->string('bulk_fabric_knit_down_approval_actual_date')->nullable();
            $table->string('bulk_fabric_knit_down_dispatch_details')->nullable();
            $table->string('bulk_fabric_knit_down_image')->nullable();
            $table->string('bulk_yarn_fabric_plan_date')->nullable();
            $table->string('bulk_yarn_fabric_actual_date')->nullable();
            $table->string('development_photo_sample_sent_plan_date')->nullable();
            $table->string('development_photo_sample_sent_actual_date')->nullable();
            $table->string('development_photo_sample_dispatch_details')->nullable();
            $table->string('development_photo_sample_dispatch_sample_image')->nullable();
            $table->string('fit_approval_plan')->nullable();
            $table->string('fit_approval_actual')->nullable();
            $table->string('fit_dispatch')->nullable();
            $table->string('fit_sample_image')->nullable();
            $table->string('size_set_approval')->nullable();
            $table->string('size_set_actual')->nullable();
            $table->string('size_set_dispatch')->nullable();
            $table->string('size_set_image')->nullable();
            $table->string('pp_approval')->nullable();
            $table->string('pp_actual')->nullable();
            $table->string('pp_dispatch')->nullable();
            $table->string('pp_sample_image')->nullable();
            $table->string('care_label_approval')->nullable();
            $table->string('care_label_actual')->nullable();
            $table->string('material_inhouse_plan')->nullable();
            $table->string('material_inhouse_actual')->nullable();
            $table->string('pp_meeting_plan')->nullable();
            $table->string('pp_meeting_actual')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('critical_paths');
    }
}
