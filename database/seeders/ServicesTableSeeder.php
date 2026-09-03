<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServicesTableSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            ['name'=>'Web Development','slug'=>'web-development','excerpt'=>'Websites that represent your business.','description'=>'We design and develop modern, responsive websites that help businesses establish their online presence and communicate effectively with their customers.','features'=>['Business websites','Corporate websites','Portfolio websites','Service-based websites','Landing pages','CMS-powered websites','E-commerce websites','Website maintenance'],'technologies'=>['Laravel','PHP','JavaScript','Tailwind CSS','MySQL']],
            ['name'=>'Custom Software Development','slug'=>'custom-software-development','excerpt'=>'Software built around the way you work.','description'=>'We develop custom software designed around your workflows, requirements, users, and goals.','features'=>['Business management systems','Inventory systems','HR management systems','Customer management systems','Internal tools','Reporting dashboards','Workflow automation','Management portals'],'technologies'=>['Laravel','PHP','MySQL']],
            ['name'=>'Mobile App Development','slug'=>'mobile-app-development','excerpt'=>'Take your services where your users are.','description'=>'We develop mobile applications focused on usability, performance, and maintainability.','features'=>['Android applications','iOS applications','Cross-platform applications','API integration','Authentication','Notifications','Application maintenance'],'technologies'=>['Flutter','React Native','Swift','Kotlin']],
            ['name'=>'Network Solutions','slug'=>'network-solutions','excerpt'=>'Reliable connectivity for your organization.','description'=>'We help organizations design, configure, troubleshoot, and maintain network environments.','features'=>['LAN/WAN setup','Network design','Router configuration','Switch configuration','VLAN configuration','Wi-Fi deployment','Network monitoring','Network troubleshooting'],'technologies'=>['Cisco','MikroTik','Ubiquiti']],
            ['name'=>'IT Infrastructure','slug'=>'it-infrastructure','excerpt'=>'Build an infrastructure you can depend on.','description'=>'We help businesses establish and maintain the infrastructure required to run their technology reliably.','features'=>['Server deployment','Linux server administration','Windows server environments','Virtualization','Backup solutions','Storage','Infrastructure monitoring','System maintenance'],'technologies'=>['Linux','Windows Server','VMware','Proxmox']],
            ['name'=>'Cloud Solutions','slug'=>'cloud-solutions','excerpt'=>'Move beyond physical infrastructure.','description'=>'Cloud architecture, migration, hosting, and optimization services to improve flexibility and resilience.','features'=>['Cloud deployment','Server migration','Application hosting','Cloud infrastructure','Backup','Monitoring','Server management','Cloud optimization'],'technologies'=>['AWS','GCP','Azure']],
            ['name'=>'Cybersecurity','slug'=>'cybersecurity','excerpt'=>'Protect the systems your business depends on.','description'=>'Security services to identify weaknesses and improve the security posture of systems and infrastructure.','features'=>['Security assessment','Access control','Network security','Server hardening','Backup strategy','Security monitoring','Basic security awareness'],'technologies'=>['OpenVAS','OSSEC','Firewall']],
            ['name'=>'IT Support & Maintenance','slug'=>'it-support-maintenance','excerpt'=>'Technology doesn\'t stop after deployment.','description'=>'Ongoing support, monitoring, and maintenance to keep systems running smoothly.','features'=>['System troubleshooting','Hardware and software support','Network troubleshooting','Server maintenance','Software maintenance','Monitoring','Updates','Technical consultation'],'technologies'=>['Nagios','Zabbix']],
            ['name'=>'UI/UX Design','slug'=>'ui-ux-design','excerpt'=>'Technology should be easy to use.','description'=>'Design interfaces that focus on clarity, usability, and the needs of the people using them.','features'=>['Website design','Dashboard design','Mobile UI','Web application UI','User flows','Wireframes','Prototyping','Design systems'],'technologies'=>['Figma','Sketch']],
            ['name'=>'Digital Transformation','slug'=>'digital-transformation','excerpt'=>'Replace repetitive work with smarter systems.','description'=>'Help organizations automate processes, centralize information, and improve reporting.','features'=>['Automate repetitive processes','Replace manual workflows','Centralize information','Improve reporting','Connect systems','Digitize existing processes'],'technologies'=>['Integration APIs','RPA']],
        ];

        foreach ($services as $s) {
            Service::updateOrCreate(['slug' => $s['slug']], array_merge($s, ['is_active' => true]));
        }
    }
}
