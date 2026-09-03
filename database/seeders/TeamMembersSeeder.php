<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TeamMember;

class TeamMembersSeeder extends Seeder
{
    public function run(): void
    {
        $members = [
            ['name'=>'Demo Developer','slug'=>'demo-developer','position'=>'Software Engineer','bio'=>'Placeholder developer profile. Replace with real member.','skills'=>['Laravel','PHP'],'is_active'=>true],
            ['name'=>'Demo Network','slug'=>'demo-network','position'=>'Network Engineer','bio'=>'Placeholder network engineer. Replace with real member.','skills'=>['Networking','Linux'],'is_active'=>true],
        ];

        foreach($members as $m) {
            TeamMember::updateOrCreate(['slug'=>$m['slug']], $m);
        }
    }
}
