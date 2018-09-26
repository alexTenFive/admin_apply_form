<?php

use Illuminate\Database\Seeder;
use App\Models\Admin\Form;

class FormsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Form::create([
            'title' => 'Form 1',
            'header_html' => e('
                <a class="btn btn-default btn-xs" href="dashboard/profiles/transfer?form-id=">Transfer New Profiles</a>
            '),
            'project_id' => 100,
            'referral_id' => 14,
            'pdf_url' => 'https://google.com',
            'form_unique_part' => sha1(str_random(60))
        ]);

        Form::create([
            'title' => 'Form 2',
            'header_html' => e('
                <div class="form-group">
                        <label for="project-id">Project ID *</label>
                        <input id="project-id" class="form-control" type="text" name="id_project" required="required">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="referral-id">Referral ID *</label>
                        <input id="referral-id" class="form-control" type="text" name="id_referral" required="required">
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <br>
                    <button type="submit" class="btn btn-default btn-block disabled">Add</button>
                </div>
            </form>
        </div>
    </div>
    
                
            </div>
        </div>
            '),
            'project_id' => 111,
            'referral_id' => 17,
            'pdf_url' => 'https://yahoo.com',
            'form_unique_part' => sha1(str_random(60))
        ]);

        Form::create([
            'title' => 'Form 3',
            'header_html' => e('
                <div id="content">
            <div class="container">
                
                
<script type="text/javascript">
    document.getElementById("no-js").outerHTML = "";
</script>
                
                    
    <div class="form-panel">
        <h1 class="text-center">
            
            List Forms
            
                            - Active
                        
            (1)
            
        </h1>
        
        <p class="notice">To add a new form please click <a href="dashboard/forms/add">here</a>.</p>
        
                
    </div>
    
                
            </div>
        </div>
            '),
            'project_id' => 113,
            'referral_id' => 15,
            'pdf_url' => 'https://yandex.ru',
            'form_unique_part' => sha1(str_random(60))
        ]);
    }
}
