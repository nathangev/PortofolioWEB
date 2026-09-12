<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Nathan Portfolio Configuration & Data Source
    |--------------------------------------------------------------------------
    |
    | Deliberately structured data adhering to the "Blueprint & Bench" brief.
    | Contains real facts, zero generic buzzwords, and clear cross-disciplinary
    | narrative between Computer Science and Nutrition & Health Science.
    |
    */

    'meta' => [
        'name' => 'Nathan',
        'full_name' => 'Nathanael Gevura',
        'institution' => 'BINUS University, Malang Campus',
        'degree' => 'Dual-Track: Computer Science / IT & Nutrition and Health Science',
        'location' => 'Malang, Indonesia',
        'headline' => 'Systems engineer and nutrition researcher operating at the convergence of software architecture and clinical food systems.',
        'bridge_narrative' => [
            'Software systems and clinical nutrition are usually treated as separate worlds. One is modeled with schemas, finite queues, and deterministic APIs; the other is measured through biochemical pathways, shelf-life kinetics, and nutrient bio-availability.',
            'Operating across both disciplines means approaching digital systems with biological constraints in mind—whether that is an expiry-aware offline POS, an AI routing tool for national school meal logistics, or algorithmic plant pathology.',
        ],
    ],

    'projects' => [
        'toko' => [
            'id' => 'toko-pos',
            'register' => 'bench',
            'accent' => 'amber',
            'category' => 'Systems I\'ve shipped',
            'title' => 'Toko Sumber Makmur POS',
            'subtitle' => 'Offline-first retail POS with FIFO batch expiry tracking',
            'repo_url' => 'https://github.com/nathangev/Toko_SE_Semester4',
            'tech_stack' => [
                'Vue 3 (Composition API)',
                'Laravel 11 REST API',
                'SQLite',
                'Pinia Store',
                'Vite',
                'IndexedDB Queue',
            ],
            'key_facts' => [
                'Built for real intermittent connectivity: offline sales transaction queue persisted via client-side IndexedDB with an atomic manual sync protocol once network is restored.',
                'FIFO batch inventory: stock is partitioned into distinct intake batches with separate expiry dates. Sales automatically deplete the oldest valid batch first without cashier intervention.',
                'Role-Based Access Control (RBAC): 3 distinct roles—Owner (full store analytics and pricing), Warehouse Admin (inventory intake and batch audit only), Cashier (sales checkout and shift logs only).',
                'Integrity-preserving returns: customer returns generate an explicit RET- prefixed inventory batch rather than mutating historical transaction logs.',
                'Strict academic specification: 6 modules built to exactly match formal Use Case, ERD, Class, Activity, and Sequence diagrams without feature creep.',
            ],
            'stats' => [
                ['label' => 'Architecture', 'value' => 'Vue 3 + Laravel 11 API'],
                ['label' => 'Database', 'value' => 'SQLite + IndexedDB'],
                ['label' => 'Inventory Logic', 'value' => 'FIFO Batch Expiry'],
                ['label' => 'RBAC Roles', 'value' => '3 Partitioned Roles'],
            ],
        ],

        'mbg' => [
            'id' => 'mbg-logistics',
            'register' => 'hybrid',
            'accent' => 'hybrid', // uses both amber & sage
            'category' => 'Cross-Disciplinary System',
            'title' => 'MBG Smart Logistics',
            'subtitle' => 'Heuristic vehicle routing for Indonesia\'s Makan Bergizi Gratis program',
            'repo_url' => 'https://github.com/nathangev',
            'tech_stack' => [
                'Python',
                'VRP / TSP Heuristics',
                'OpenStreetMap / Graph Networks',
                'FastAPI',
                'Thermal Window Constraints',
            ],
            'problem' => 'Indonesia\'s national Makan Bergizi Gratis initiative relies on decentralized Satuan Pelayanan Pemenuhan Gizi (SPPG central kitchens) delivering cooked, perishable meals to dozens of recipient schools daily.',
            'solution' => 'Engineered a route optimization model that prioritizes food safety kinetics alongside transit distance: meals must reach classrooms within a strict 2-hour thermal safety window before morning break schedules.',
            'key_facts' => [
                'Time-window constrained Vehicle Routing Problem (VRPTW) factoring in kitchen cooking batches and staggered school recess hours.',
                'Perishability buffer: incorporates maximum allowed post-pack transit duration before temperature drops below the safe serving threshold.',
                'Dynamic vehicle capacity matching: balances meal crate payloads against localized road topography around Malang school clusters.',
            ],
            'stats' => [
                ['label' => 'Domain', 'value' => 'National Nutrition Program'],
                ['label' => 'Optimization', 'value' => 'Time-Window VRP'],
                ['label' => 'Safety Threshold', 'value' => '< 120 Min Thermal Window'],
                ['label' => 'Node Hierarchy', 'value' => 'SPPG Kitchens → Schools'],
            ],
        ],

        'leaf' => [
            'id' => 'leaf-classifier',
            'register' => 'hybrid',
            'accent' => 'hybrid', // uses both amber & sage
            'category' => 'Cross-Disciplinary System',
            'title' => 'Computer Vision Leaf Pathology',
            'subtitle' => 'Translating clinical diagnostic methods to automated plant health detection',
            'repo_url' => 'https://github.com/nathangev',
            'tech_stack' => [
                'PyTorch',
                'Transfer Learning (CNN)',
                'MobileNetV2 Backbone',
                'OpenCV',
                'Pathology Dataset',
            ],
            'problem' => 'Nutrient deficiencies (nitrogen chlorosis, potassium scorch) and bacterial infections in agricultural crops exhibit subtle visual patterns that require expert diagnostic inspection.',
            'solution' => 'Trained a lightweight convolutional neural network using transfer learning to classify foliar disease and nutritional deficiency signatures with high diagnostic confidence.',
            'key_facts' => [
                'Direct conceptual parallel to clinical diagnostics: multi-class feature extraction identifying chlorotic halos, necrotic lesions, and vascular discoloration.',
                'Edge-deployable architecture optimized for low-compute field devices using quantized convolutional weights.',
                'Distinguishes abiotic stress (nutrient starvation, moisture stress) from biotic pathogens (fungal/bacterial blight).',
            ],
            'stats' => [
                ['label' => 'Neural Architecture', 'value' => 'Transfer Learning CNN'],
                ['label' => 'Clinical Parallel', 'value' => 'Foliar Symptomatology'],
                ['label' => 'Inference Target', 'value' => 'Biotic vs Abiotic Stress'],
            ],
        ],

        'simkost' => [
            'id' => 'simkost',
            'register' => 'bench',
            'accent' => 'amber',
            'category' => 'Systems I\'ve designed',
            'title' => 'SIMKOST Boarding House System',
            'subtitle' => 'Relational database schema modeling & UI architecture',
            'figma_url' => 'https://www.figma.com/design/gkB6gDssRcHJO7qVmjgXiZ/FINPRO-LAB-DATABASE-SIMKOST',
            'course' => 'FINPRO Lab Database — BINUS University',
            'tech_stack' => [
                'Figma UI/UX',
                'Relational Database Modeling',
                'MySQL / SQL DDL',
                'Normalized 3NF Schema',
            ],
            'framing_note' => 'Designed and modeled, not shipped. This project was a rigorous database engineering and interface workflow exercise, presented here for its structural schema design.',
            'key_facts' => [
                '11-table third-normal-form (3NF) relational schema covering room inventory, tier configurations, tenant credentials, lease agreements, utility metered billing, and receipt audits.',
                'UX decision: discarded standard monolithic tables in favor of a chronologically segmented lease timeline, making upcoming contract renewals and payment discrepancies instantly scannable.',
                'Enforced referential integrity: cascade rules, soft-archival for past tenants, and immutable transaction ledgers for utility reconciliations.',
            ],
            'stats' => [
                ['label' => 'Schema Size', 'value' => '11 Relational Tables (3NF)'],
                ['label' => 'Scope', 'value' => 'FINPRO Lab Database'],
                ['label' => 'Status', 'value' => 'Modeled & Prototyped'],
            ],
        ],

        'research' => [
            'id' => 'research',
            'register' => 'bench',
            'accent' => 'sage',
            'category' => 'Research & Biochemistry',
            'title' => 'Clinical Nutrition Biomarker & Dietary Assessment',
            'subtitle' => 'Investigating metabolic markers and targeted nutritional interventions',
            'venue' => 'BINUS University Jakarta Academic Review & Presentation',
            'type' => 'Academic Paper & Presentation',
            'abstract' => 'An empirical inquiry into biochemical markers and targeted nutritional profiles within specific population cohorts. Evaluated macro and micronutrient intake correlations against metabolic biomarkers, assessing the quantitative impact of dietary formulation adjustments.',
            'key_findings' => [
                'Quantified shifts in physiological markers following structured macro-ratio nutritional adjustments.',
                'Identified biochemical monitoring gaps in standard dietary questionnaires compared to objective lab values.',
                'Demonstrated the necessity of algorithmic intake tracking tools to bridge clinical recommendations and daily dietary compliance.',
            ],
            'stats' => [
                ['label' => 'Institution', 'value' => 'BINUS University Jakarta Review'],
                ['label' => 'Discipline', 'value' => 'Clinical Nutrition & Biochemistry'],
                ['label' => 'Role', 'value' => 'Lead Student Researcher'],
            ],
        ],
    ],

    'contact' => [
        'email' => 'nathanael.gevura@binus.ac.id',
        'github' => 'https://github.com/nathangev',
        'linkedin' => 'https://linkedin.com/in/nathanael-gevura',
        'campus' => 'BINUS University @ Malang, Araya Mansion No. 8-22, Malang, East Java',
    ],
];
