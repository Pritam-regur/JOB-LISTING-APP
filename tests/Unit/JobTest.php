<?php

namespace Tests\Unit;

use App\Models\Employer;
use App\Models\Job;
use PHPUnit\Framework\TestCase;

// class JobTest extends TestCase
// {
//     /**
//      * A basic unit test example.
//      */
//     public function test_example(): void
//     {
//         $this->assertTrue(true);
//     }
// }

it('belongs to an employer', function(){
// AAA

// Arrange 
$employer = Employer::factory()->create();
$job = Job::factory()->create([
    'employer_id'=>$employer->id,
]);

// Act
expect($job->employer->is($employer))->toBeTrue();

// Assert
//   expect(true)->toBeTrue();
});



it('can have tags', function(){
// AAA
  $job = Job::factory()->create();

  $job->tag('Frontend');

  expect($job->tags)->toHaveCount(1);
});