<?php

use Illuminate\Database\Seeder;
use App\Section;

class SectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $Pre_Calculo = Subject::where('subject_name','Pre-Calculo');
        $Gerencias_del_Aprendizaje = Subject::where('subject_name','Gerencias del Aprendizaje');
        $Tecnicas_de_Comunicacion = Subject::where('subject_name','Tecnicas de Comunicacion');
        $Spot_Creativo = Subject::where('subject_name','Spot Creativo');
        $Proyectos_Institucionales = Subject::where('subject_name','Proyectos Institucionales');
        $FAPI = Subject::where('subject_name','FAPI');
        $Socratico = Subject::where('subject_name','Socratico');

        $section = new Section();
        $section->section_name = 'Seccion A';
        $section->save();

        $section->subject()->attach($Pre_Calculo);
        $section->subject()->attach($Gerencias_del_Aprendizaje);
        $section->subject()->attach($Tecnicas_de_Comunicacion);
        $section->subject()->attach($Spot_Creativo);
        $section->subject()->attach($Proyectos_Institucionales);
        $section->subject()->attach($FAPI);
        $section->subject()->attach($Socratico);
    }
}
