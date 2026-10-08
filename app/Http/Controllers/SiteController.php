<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Display Prowave Technologies Software House Landing Page.
     */
    public function index()
    {
        $services = [
            [
                'id' => 'custom-software',
                'icon' => 'fa-cubes',
                'title' => 'Custom Software & Enterprise Systems',
                'description' => 'Tailor-made enterprise software systems, scalable microservices, multi-tenant SaaS platforms, and automated workflow engines.',
                'tags' => ['Enterprise ERP', 'POS Systems', 'CRM Portals', 'Manufacturing']
            ],
            [
                'id' => 'web-dev',
                'icon' => 'fa-code',
                'title' => 'Full-Stack Web Development',
                'description' => 'Ultra-fast, secure, and responsive web applications designed to convert visitors and scale your business operations.',
                'tags' => ['Custom Web Apps', 'REST & GraphQL APIs', 'Reactive Frontends', 'Secure Portals']
            ],
            [
                'id' => 'mobile-dev',
                'icon' => 'fa-mobile-screen-button',
                'title' => 'Mobile App Engineering',
                'description' => 'High-performance cross-platform iOS and Android mobile apps with intuitive UX, real-time push notifications, and cloud sync.',
                'tags' => ['iOS & Android Apps', 'Cross-Platform Native', 'Real-Time Push', 'Cloud Backend']
            ],
            [
                'id' => 'ai-ml',
                'icon' => 'fa-brain',
                'title' => 'AI & Process Automation',
                'description' => 'Transform your business with custom AI assistants, automated data extraction pipelines, intelligent chatbots, and workflow automation.',
                'tags' => ['AI Chatbots', 'LLM Integration', 'Process Automation', 'Predictive Analytics']
            ],
            [
                'id' => 'cloud-devops',
                'icon' => 'fa-cloud-arrow-up',
                'title' => 'Cloud Infrastructure & DevOps',
                'description' => 'Robust cloud architecture setup, server optimization, CI/CD pipeline automation, zero-downtime deployment, and 24/7 monitoring.',
                'tags' => ['AWS / Cloud', 'Docker Containerization', 'CI/CD Pipelines', '24/7 Monitoring']
            ],
            [
                'id' => 'ui-ux',
                'icon' => 'fa-bezier-curve',
                'title' => 'UI/UX & Product Design',
                'description' => 'User-first digital experiences, high-converting product interfaces, modern design systems, and rapid interactive prototyping.',
                'tags' => ['User Experience', 'Modern UI Design', 'Interactive Prototypes', 'Design Systems']
            ]
        ];

        // 10 Specialized Business Software Suites & Manufacturing Solutions
        $softwareSuites = [
            [
                'title' => 'Textile & Manufacturing ERP System',
                'stars' => 5,
                'category' => 'manufacturing',
                'icon' => 'fa-industry',
                'target' => 'Manufacturing & Industrial Factories',
                'description' => 'Comprehensive manufacturing ERP covering production planning, raw material BOM, loom/machine tracking, batch inventory, and yield analysis.',
                'modules' => ['Production Planning', 'Raw Material BOM', 'Machine Downtime', 'Yield Analytics']
            ],
            [
                'title' => 'ERP Management System',
                'stars' => 5,
                'category' => 'enterprise',
                'icon' => 'fa-building-gear',
                'target' => 'Enterprise Businesses & Corporations',
                'description' => 'Complete business automation suite unifying finances, multi-branch operations, procurement, stock control, and executive BI reporting.',
                'modules' => ['Financial Accounting', 'Procurement & Vendor', 'Multi-Branch Sync', 'Executive BI']
            ],
            [
                'title' => 'POS & Inventory Management System',
                'stars' => 5,
                'category' => 'retail',
                'icon' => 'fa-cash-register',
                'target' => 'Retail Chains, Supermarkets & Shops',
                'description' => 'High-speed point of sale with barcode scanning, automated stock alerts, multi-counter billing, and daily profit loss analytics.',
                'modules' => ['Barcode Scan Billing', 'Real-Time Stock Alerts', 'Multi-Counter POS', 'Daily Sales Report']
            ],
            [
                'title' => 'CRM & Lead Management System',
                'stars' => 5,
                'category' => 'enterprise',
                'icon' => 'fa-users-gear',
                'target' => 'Sales Teams & Service Agencies',
                'description' => 'Complete customer relationship management with lead tracking, deal pipelines, automated WhatsApp/email follow-ups, and sales targets.',
                'modules' => ['Lead Pipeline', 'WhatsApp/Email Automation', 'Deal Stages', 'Sales Performance']
            ],
            [
                'title' => 'Restaurant & Food Management System',
                'stars' => 5,
                'category' => 'retail',
                'icon' => 'fa-utensils',
                'target' => 'Restaurants, Cafes & Fast Food Outlets',
                'description' => 'Kitchen display system (KDS), table management, recipe costing, online food order integration, and inventory depletion.',
                'modules' => ['Kitchen Display KDS', 'Table Order Billing', 'Recipe Costing', 'Rider Management']
            ],
            [
                'title' => 'Distribution Management System (DMS)',
                'stars' => 4,
                'category' => 'distribution',
                'icon' => 'fa-truck-ramp-box',
                'target' => 'Distributors, FMCG & Wholesale Dealers',
                'description' => 'Distributor route planning, mobile order booking for field agents, credit recovery tracking, and warehouse dispatch logs.',
                'modules' => ['Route Order Booking', 'Credit & Recovery', 'Van Stock Balancing', 'Distributor Portal']
            ],
            [
                'title' => 'Pharmacy & Healthcare POS System',
                'stars' => 4,
                'category' => 'healthcare',
                'icon' => 'fa-prescription-bottle-medical',
                'target' => 'Pharmacies, Medical Stores & Chains',
                'description' => 'Medicine batch expiry tracking, formula search, supplier purchase orders, regulatory compliance, and quick prescription billing.',
                'modules' => ['Batch Expiry Alerts', 'Salt/Formula Search', 'Supplier Purchasing', 'Prescription Billing']
            ],
            [
                'title' => 'Clinic & Patient Management System',
                'stars' => 4,
                'category' => 'healthcare',
                'icon' => 'fa-hospital-user',
                'target' => 'Clinics, Hospitals & Doctors',
                'description' => 'Patient EMR records, online appointment scheduling, doctor fee splitting, lab test reports, and automated SMS reminders.',
                'modules' => ['EMR Patient History', 'Doctor Scheduling', 'Lab Report Portal', 'Automated SMS']
            ],
            [
                'title' => 'HR & Payroll Management System',
                'stars' => 4,
                'category' => 'hr',
                'icon' => 'fa-user-tie',
                'target' => 'Corporate Companies & Factories',
                'description' => 'Biometric attendance sync, automated salary slip generation, loan/advance tracking, provident fund, and leave approvals.',
                'modules' => ['Biometric Sync', 'Automated Payslips', 'Loan/Advance Logs', 'Leave Approvals']
            ],
            [
                'title' => 'Custom Tailored Business Software',
                'stars' => 4,
                'category' => 'enterprise',
                'icon' => 'fa-laptop-code',
                'target' => 'Unique Business Workflows & Operations',
                'description' => 'Tailor-made software built strictly around your company operating procedures with custom database logic and mobile app extensions.',
                'modules' => ['100% Custom Workflow', 'API Integration', 'Role Security', 'Dedicated Maintenance']
            ]
        ];

        // Authentic Software Portfolio Projects with Real Screenshots
        $portfolio = [
            [
                'title' => 'Textile & Industrial Manufacturing ERP',
                'category' => 'MANUFACTURING & INDUSTRIAL ERP',
                'image' => asset('images/portfolio-textile-erp.jpg'),
                'description' => 'End-to-end industrial textile ERP covering yarn raw material BOM, loom production tracking, machine downtime logs, and automated yield accounting.',
                'impact' => 'Streamlined operations for 3 industrial textile plants with 99.99% uptime.'
            ],
            [
                'title' => 'POS & Retail Inventory System',
                'category' => 'RETAIL POS & INVENTORY SYSTEM',
                'image' => asset('images/portfolio-pos.jpg'),
                'description' => 'High-speed multi-branch retail POS featuring barcode scanning, real-time stock depletion alerts, and automated daily P&L reporting.',
                'impact' => 'Deployed across 150+ retail counters with real-time stock sync.'
            ],
            [
                'title' => 'Distribution Management System (DMS)',
                'category' => 'DISTRIBUTION & FIELD ORDER BOOKING',
                'image' => asset('images/portfolio-dms.jpg'),
                'description' => 'Field sales order booking mobile app synchronized with distributor route planning, warehouse dispatch, and credit recovery logs.',
                'impact' => '80% faster credit recovery & route order dispatch velocity.'
            ],
            [
                'title' => 'Corporate HR & Biometric Payroll System',
                'category' => 'HR & BIOMETRIC PAYROLL PORTAL',
                'image' => asset('images/portfolio-hr.jpg'),
                'description' => 'Enterprise HR system with biometric attendance device integration, automated salary slips, advance logs, and leave approval workflows.',
                'impact' => 'Automated monthly salary processing for 1,200+ employees.'
            ],
            [
                'title' => 'CRM & Sales Automation Portal',
                'category' => 'CRM & LEAD MANAGEMENT',
                'image' => asset('images/portfolio-crm.jpg'),
                'description' => 'Customer relationship management system with automated deal pipeline tracking, WhatsApp follow-ups, and sales team analytics.',
                'impact' => 'Boosted lead conversion rates by 42% across corporate sales channels.'
            ],
            [
                'title' => 'Clinic & Hospital EMR System',
                'category' => 'HEALTHCARE & PATIENT CARE',
                'image' => asset('images/portfolio-clinic.jpg'),
                'description' => 'Comprehensive patient EMR records system with online doctor scheduling, lab report dispatch, and prescription billing.',
                'impact' => 'Digitized patient history and reduced wait times across 25 medical clinics.'
            ]
        ];

        $techStack = [
            [
                'name' => 'Enterprise ERP Engine',
                'category' => 'backend',
                'icon' => 'fa-layer-group',
                'desc' => 'High Performance Architecture'
            ],
            [
                'name' => 'Modern Web Frontends',
                'category' => 'frontend',
                'icon' => 'fa-code',
                'desc' => 'Dynamic Reactive Interfaces'
            ],
            [
                'name' => 'Mobile Field Apps',
                'category' => 'mobile',
                'icon' => 'fa-mobile-screen-button',
                'desc' => 'iOS & Android Native Apps'
            ],
            [
                'name' => 'AI & Process Automation',
                'category' => 'ai',
                'icon' => 'fa-brain',
                'desc' => 'LLM & Process Automation'
            ],
            [
                'name' => 'Relational Data Stores',
                'category' => 'backend',
                'icon' => 'fa-database',
                'desc' => 'Secure ERP Database Architecture'
            ],
            [
                'name' => 'Cloud & DevOps Setup',
                'category' => 'devops',
                'icon' => 'fa-cloud-arrow-up',
                'desc' => 'Containerized Scalable Deploy'
            ]
        ];

        $metrics = [
            ['count' => 250, 'suffix' => '+', 'label' => 'Software Suites Deployed'],
            ['count' => 99, 'suffix' => '.4%', 'label' => 'Client Retention SLA'],
            ['count' => 18, 'suffix' => '+', 'label' => 'Industries Served'],
            ['count' => 45, 'suffix' => '+', 'label' => 'Tech Experts']
        ];

        return view('index', compact('services', 'softwareSuites', 'techStack', 'portfolio', 'metrics'));
    }
}
