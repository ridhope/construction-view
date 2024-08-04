<?php

namespace App\Tests\Entity;

use App\Entity\Project;
use PHPUnit\Framework\TestCase;

class ProjectTest extends TestCase
{
    public function testProjectEntity()
    {
        $project = new Project();
        
        $project->setProjectid('123');
        $this->assertEquals('123', $project->getProjectid());

        $project->setProjectname('Test Project');
        $this->assertEquals('Test Project', $project->getProjectname());

        $project->setProjectlocation('Test Location');
        $this->assertEquals('Test Location', $project->getProjectlocation());

        $project->setProjectstage('Design & Documentation');
        $this->assertEquals('Design & Documentation', $project->getProjectstage());

        $project->setProjectcategory('Category A');
        $this->assertEquals('Category A', $project->getProjectcategory());

        $project->setOthercategory('Other Category');
        $this->assertEquals('Other Category', $project->getOthercategory());

        $date = new \DateTime('2023-01-01');
        $project->setConstructionstartdate($date);
        $this->assertEquals($date, $project->getConstructionstartdate());

        $project->setProjectdetails('Details of the project');
        $this->assertEquals('Details of the project', $project->getProjectdetails());

        $project->setProjectcreatorid('creator123');
        $this->assertEquals('creator123', $project->getProjectcreatorid());
    }
}