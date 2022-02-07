<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Maatwebsite\Excel\Concerns\ToCollection;
use Carbon\Carbon;
use DB;

class ExcelImportTable implements ToCollection
{   
    // @param Collection $collection
    
    public function collection(Collection $collection)
    {
        // dd('Testing', $collection);  
        $table_name = ''; 

        foreach($collection as $key=>$value)
        {
            if($key==0)
            {     
                $table_name = $value[0];
                // dd($value[0]);
            }
        }

        Schema::create($table_name, function(Blueprint $table) use($collection)
        {
            foreach($collection as $key=>$value)
            {
                $value1 = $value[2];
                $value2 = $value[0];
                $value3 = $value[3];
                $value4 = $value[7];
                $value5 = $value[10];
                $value6 = $value[11];
                $value7 = $value[1];

                // if($key==3){
                //     $table->$value1('id',$value3)->comment = $value7;
                //     $table->primary('id');
                // }
                
                if($key>1)
                {
                    // dd($key,$value);

                    if($value4=='Yes')
                    {
                        if($value2== 'externalCode'){
                            if($value1== 'Auto Number'){
                                $table->increments('id')->comment = $value7;
                            }
                            else{
                                $table->$value1('id',$value3)->primary()->comment = $value7;
                            }
                        }
                        // else if($value1=='String'){                            
                        //     $table->char($value2,$value3)->comment = $value7;
                        // }
                        else if($value1== 'Decimal'){
                            // dd(explode(',', $value5));
                            $arr = explode(',', $value6);
                            $table->$value1($value2,$arr[0],$arr[1])->comment = $value7;
                            // $table->$value1($value2,7,2)->comment = $value7;
                        }
                        // else if($value1== 'LONG'){
                        //     $table->LONGTEXT($value2,$value3)->comment = $value7;
                        // }
                        else if($value1== 'Attachment'){
                            $table->binary($value2)->comment = $value7;
                        }
                        else if($value1=='Enum'){                            
                            $table->$value1($value2,[$value5])->comment = $value7;
                            // $table->$value1($value2,'Active, Inactive')->comment = $value7;
                        } 
                        // else if($value1== 'User'){
                        //     $table->bigInteger($value2)->length(10)->unsigned()->comment = $value7;
                        //     // $table->foreign($value2)->references('id')->on('users');
                        // }
                        else if($value1== 'PICKLIST' || $value1== 'Picklist' || $value1== 'User'){
                            $table->integer($value2)->length(10)->unsigned()->comment = $value7;
                            // $table->integer($value2,'10')->comment = $value7;
                        }
                        else if($value1== 'Foundation Object'){

                            $table->string($value2,'32')->comment = $value7;
                            // $table->foreign($value2)->references('id')->on('cost_center');
                        }
                        else if($value1== 'Generic Object'){
                            $table->integer($value2)->length(10)->unsigned()->comment = $value7;
                        }
                        // else if($value1== 'Cost Center' || $value1== 'Business Unit' || $value1== 'Division' ||
                        //         $value1== 'Frequency' || $value1== 'Department' || $value1== 'Geozone' || 
                        //         $value1== 'Pay Grade' || $value1== 'Pay Group' || $value1== 'Pay Range' || 
                        //         $value1== 'Pay Component' || $value1== 'Pay Component Group' || $value1== 'Legal Entity' || 
                        //         $value1== 'Location' || $value1== 'Location Group' || $value1== 'Job Function' || 
                        //         $value1== 'Job Classification'){

                        //     $table->string($value2,'32')->comment = $value7;
                        //     // $table->foreign($value2)->references('id')->on('cost_center');
                        // }
                        // else if($value1== 'Benefit Schedule'){
                        //     $table->integer($value2)->length(10)->unsigned()->comment = $value7;
                        //     // $table->String($value2,'11')->comment = $value7;
                        //     $table->foreign($value2)->references('id')->on('benefit_schedule');
                        // }
                        else
                            $table->$value1($value2,$value3)->comment = $value7;   
                    }
                    
                    else
                    {   
                        if($value1=='Enum'){
                            $table->$value1($value2,[$value5])->nullable()->comment = $value7;
                            // $table->$value1($value2,'Active, Inactive')->nullable()->comment = $value7;
                        }
                        // else if($value1=='String'){                            
                        //     $table->char($value2,$value3)->comment = $value7;
                        // }
                        else if($value1== 'Decimal'){
                            $arr = explode(',', $value6);
                            $table->$value1($value2,$arr[0],$arr[1])->nullable()->comment = $value7;
                        }
                        else if($value1== 'Attachment'){
                            $table->binary($value2)->nullable()->comment = $value7;
                        } 
                        else if($value1== 'PICKLIST' || $value1== 'Picklist' || $value1== 'User'){
                            $table->integer($value2)->length(10)->unsigned()->nullable()->comment = $value7;
                            // $table->integer($value2,'11')->nullable()->comment = $value7;
                            // $table->foreign($value2)->references('id')->on('picklist');
                        }
                        // else if($value1== 'User'){
                        //     $table->integer($value2)->length(10)->unsigned()->nullable()->comment = $value7;
                        //     // $table->foreign($value2)->references('id')->on('users');
                        // }
                        // else if($value1== 'LONG'){
                        //     $table->LONGTEXT($value2,$value3)->nullable()->comment = $value7;
                        // }
                        else if($value1== 'Foundation Object'){

                            $table->string($value2,'32')->nullable()->comment = $value7;
                        }
                        else if($value1== 'Generic Object'){
                            $table->integer($value2)->length(10)->unsigned()->nullable()->comment = $value7;
                        }
                        // else if($value1== 'Cost Center' || $value1== 'Business Unit' || $value1== 'Division' ||
                        //         $value1== 'Frequency' || $value1== 'Department' || $value1== 'Geozone' || 
                        //         $value1== 'Pay Grade' || $value1== 'Pay Group' || $value1== 'Pay Range' || 
                        //         $value1== 'Pay Component' || $value1== 'Pay Component Group' || $value1== 'Legal Entity' || 
                        //         $value1== 'Location' || $value1== 'Location Group' || $value1== 'Job Function' || 
                        //         $value1== 'Job Classification'){

                        //     $table->string($value2,'32')->nullable()->comment = $value7;
                        // }
                        else
                            $table->$value1($value2,$value3)->nullable()->comment = $value7;
                    }
                }
                
            }

            // $table->decimal('cost',5,2);
            // $table->rememberToken();
            // $table->timestamps();
            
            // $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            // $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->timestamp('created_at')->useCurrent()->comment = 'Created_at';
            $table->timestamp('updated_at')->useCurrent()->comment = 'Updated_at';
        });

        foreach($collection as $key=>$value)
        {
            if($key==0)
            {     
                $table_name = $value[0];
                // dd($value[0]);
            }
            $value1 = $value[2];
            $value2 = $value[0];
            $value3 = $value[3];
            $value4 = $value[6];
            $value5 = $value[9];
            $value6 = $value[10];
            $value7 = $value[1];
            
            if($key>1)
            {
                if($value1== 'User'){
                    DB::statement("ALTER TABLE `$table_name` ADD FOREIGN KEY (`$value2`) REFERENCES users(id)");
                    // $table->foreign($value2)->references('id')->on('users');
                }
                if($value1== 'PICKLIST' OR $value1== 'Picklist'){
                    DB::statement("ALTER TABLE `$table_name` ADD FOREIGN KEY (`$value2`) REFERENCES picklist(id)");
                    // $table->foreign($value2)->references('id')->on('picklist');
                }

                if($value6== 'geozone'){
                    DB::statement("ALTER TABLE `$table_name` ADD FOREIGN KEY (`$value2`) REFERENCES geozone(id)");
                    // $table->foreign($value2)->references('id')->on('geozone');
                }
                // else if($value1== 'User'){
                //     DB::statement("ALTER TABLE `$table_name` ADD FOREIGN KEY (`$value2`) REFERENCES users(id)");
                //     // $table->foreign($value2)->references('id')->on('users');
                // }
                // else if($value1== 'PICKLIST' OR $value1== 'Picklist'){
                //     // $table->integer($value2,'10')->comment = $value7;
                //     DB::statement("ALTER TABLE `$table_name` ADD FOREIGN KEY (`$value2`) REFERENCES picklist(id)");
                //     // $table->foreign($value2)->references('id')->on('picklist');
                // }
                else if($value6== 'benefit'){
                    if($value1 == 'Generic Object'){
                        DB::statement("ALTER TABLE `$table_name` ADD FOREIGN KEY (`$value2`) REFERENCES benefit(id)");
                        // $table->foreign($value2)->references('id')->on('benefit_schedule');
                    }
                }
                else if($value6== 'business_unit'){
                    DB::statement("ALTER TABLE `$table_name` ADD FOREIGN KEY (`$value2`) REFERENCES business_unit(id)");
                    // $table->foreign($value2)->references('id')->on('business_unit');
                }
                else if($value6== 'cost_center'){
                    DB::statement("ALTER TABLE `$table_name` ADD FOREIGN KEY (`$value2`) REFERENCES cost_center(id)");
                    // $table->foreign($value2)->references('id')->on('cost_center');
                }
                else if($value6== 'department'){
                    DB::statement("ALTER TABLE `$table_name` ADD FOREIGN KEY (`$value2`) REFERENCES department(id)");
                    // $table->foreign($value2)->references('id')->on('department');
                }
                else if($value6== 'frequency'){
                    DB::statement("ALTER TABLE `$table_name` ADD FOREIGN KEY (`$value2`) REFERENCES frequency(id)");
                    // $table->foreign($value2)->references('id')->on('frequency');
                }
                else if($value6== 'pay_range'){
                    DB::statement("ALTER TABLE `$table_name` ADD FOREIGN KEY (`$value2`) REFERENCES pay_range(id)");
                    // $table->foreign($value2)->references('id')->on('pay_range');
                }
                else if($value6== 'job_function'){
                    DB::statement("ALTER TABLE `$table_name` ADD FOREIGN KEY (`$value2`) REFERENCES job_function(id)");
                    // $table->foreign($value2)->references('id')->on('job_function');
                }
                else if($value6== 'job_classification'){
                    DB::statement("ALTER TABLE `$table_name` ADD FOREIGN KEY (`$value2`) REFERENCES job_classification(id)");
                    // $table->foreign($value2)->references('id')->on('job_classification');
                }
                else if($value6== 'pay_grade'){
                    DB::statement("ALTER TABLE `$table_name` ADD FOREIGN KEY (`$value2`) REFERENCES pay_grade(id)");
                    // $table->foreign($value2)->references('id')->on('pay_grade');
                }
                else if($value6== 'pay_group'){
                    DB::statement("ALTER TABLE `$table_name` ADD FOREIGN KEY (`$value2`) REFERENCES pay_group(id)");
                    // $table->foreign($value2)->references('id')->on('pay_group');
                }
                else if($value6== 'pay_component'){
                    DB::statement("ALTER TABLE `$table_name` ADD FOREIGN KEY (`$value2`) REFERENCES pay_component(id)");
                    // $table->foreign($value2)->references('id')->on('pay_component');
                }
                else if($value6== 'pay_component_group'){
                    DB::statement("ALTER TABLE `$table_name` ADD FOREIGN KEY (`$value2`) REFERENCES pay_component_group(id)");
                    // $table->foreign($value2)->references('id')->on('pay_component_group');
                }
                else if($value6== 'location_group'){
                    DB::statement("ALTER TABLE `$table_name` ADD FOREIGN KEY (`$value2`) REFERENCES location_group(id)");
                    // $table->foreign($value2)->references('id')->on('location_group');
                }
                else if($value6== 'location'){
                    DB::statement("ALTER TABLE `$table_name` ADD FOREIGN KEY (`$value2`) REFERENCES location(id)");
                    // $table->foreign($value2)->references('id')->on('location');
                }
                else if($value6== 'legal_entity'){
                    DB::statement("ALTER TABLE `$table_name` ADD FOREIGN KEY (`$value2`) REFERENCES legal_entity(id)");
                    // $table->foreign($value2)->references('id')->on('legal_entity');
                }
                else if($value6== 'division'){
                    DB::statement("ALTER TABLE `$table_name` ADD FOREIGN KEY (`$value2`) REFERENCES division(id)");
                    // $table->foreign($value2)->references('id')->on('division');
                }
                else if($value6== 'positionn'){
                    DB::statement("ALTER TABLE `$table_name` ADD FOREIGN KEY (`$value2`) REFERENCES positionn(id)");
                    // $table->foreign($value2)->references('id')->on('benefit_schedule');
                }
                else if($value6== 'benefit_schedule'){
                    DB::statement("ALTER TABLE `$table_name` ADD FOREIGN KEY (`$value2`) REFERENCES benefit_schedule(id)");
                    // $table->foreign($value2)->references('id')->on('benefit_schedule');
                }
                else if($value6== 'benefit_schedule_period'){
                    DB::statement("ALTER TABLE `$table_name` ADD FOREIGN KEY (`$value2`) REFERENCES benefit_schedule_period(id)");
                    // $table->foreign($value2)->references('id')->on('benefit_schedule');
                }
                else if($value6== 'benefit_claim_accumulation'){
                    DB::statement("ALTER TABLE `$table_name` ADD FOREIGN KEY (`$value2`) REFERENCES benefit_claim_accumulation(id)");
                    // $table->foreign($value2)->references('id')->on('benefit_schedule');
                }
                else if($value6== 'benefit_dependent_detail'){
                    DB::statement("ALTER TABLE `$table_name` ADD FOREIGN KEY (`$value2`) REFERENCES benefit_dependent_detail(id)");
                    // $table->foreign($value2)->references('id')->on('benefit_schedule');
                }
                else if($value6== 'benefit_insurance_provider'){
                    DB::statement("ALTER TABLE `$table_name` ADD FOREIGN KEY (`$value2`) REFERENCES benefit_insurance_provider(id)");
                    // $table->foreign($value2)->references('id')->on('benefit_schedule');
                }
                else if($value6== 'benefit_program'){
                    DB::statement("ALTER TABLE `$table_name` ADD FOREIGN KEY (`$value2`) REFERENCES benefit_program(id)");
                    // $table->foreign($value2)->references('id')->on('benefit_schedule');
                }
                else if($value6== 'benefit_exception'){
                    DB::statement("ALTER TABLE `$table_name` ADD FOREIGN KEY (`$value2`) REFERENCES benefit_exception(id)");
                    // $table->foreign($value2)->references('id')->on('benefit_schedule');
                }
                else if($value6== 'benefit_payment_option'){
                    DB::statement("ALTER TABLE `$table_name` ADD FOREIGN KEY (`$value2`) REFERENCES benefit_payment_option(id)");
                    // $table->foreign($value2)->references('id')->on('benefit_schedule');
                }
                else if($value6== 'benefit_enrollment'){
                    DB::statement("ALTER TABLE `$table_name` ADD FOREIGN KEY (`$value2`) REFERENCES benefit_enrollment(id)");
                    // $table->foreign($value2)->references('id')->on('benefit_schedule');
                }
                else if($value6== 'benefit_insurance_plan'){
                    DB::statement("ALTER TABLE `$table_name` ADD FOREIGN KEY (`$value2`) REFERENCES benefit_insurance_plan(id)");
                    // $table->foreign($value2)->references('id')->on('benefit_schedule');
                }
                else if($value6== 'benefit_insurance_enrolle_option'){
                    DB::statement("ALTER TABLE `$table_name` ADD FOREIGN KEY (`$value2`) REFERENCES benefit_insurance_enrolle_option(id)");
                    // $table->foreign($value2)->references('id')->on('benefit_schedule');
                }
                else if($value6== 'benefit_insurance_coverage'){
                    DB::statement("ALTER TABLE `$table_name` ADD FOREIGN KEY (`$value2`) REFERENCES benefit_insurance_coverage(id)");
                    // $table->foreign($value2)->references('id')->on('benefit_schedule');
                }
                else if($value6== 'allowed_model'){
                    DB::statement("ALTER TABLE `$table_name` ADD FOREIGN KEY (`$value2`) REFERENCES allowed_model(id)");
                    // $table->foreign($value2)->references('id')->on('benefit_schedule');
                }

            }
        }
    }
}
