<?php

return [

    /**
     * This key will determine if the services of lucid application should be loaded from Database or not.
     * If false, the App\Providers\AppServiceProvider will register all the lucid services under config of
     * core.lucid_application_providers.
     *
     * if true, The App\Services\ApplicationService\Providers will take care of loading the services from database
     * depending on their active statuses (true).
     */
    'toggle_app_services' => env('TOGGLE_APP_SERVICES', true),

    /**
     * Define your service of lucid application here and re-run the Database\Seeders\ApplicationServiceSeeder
     */
    'lucid_application_providers' => [
        [
            'provider' => \App\Services\Auth\Providers\AuthServiceProvider::class,
            'description' => 'Application Core Authentication Service',
            'force_required' => true,
            'active' => true,
        ],
        [
            'provider' => \App\Services\Authorization\Providers\AuthorizationServiceProvider::class,
            'description' => 'Application Core Authorization Service',
            'force_required' => true,
            'active' => true,
        ],
        [
            'provider' => \App\Services\Students\Providers\StudentsServiceProvider::class,
            'description' => 'Students Service',
            'force_required' => true,
            'active' => true,
        ],
        [
            'provider' => \App\Services\Users\Providers\UsersServiceProvider::class,
            'description' => 'Users Service',
            'force_required' => true,
            'active' => true,
        ],
        [
            'provider' => \App\Services\Instructors\Providers\InstructorsServiceProvider::class,
            'description' => 'Instructors Service',
            'force_required' => true,
            'active' => true,
        ],

    ],

    'roles' => [
        'super-admin',
        'student',
        'instructor',
    ],

    // format - action-resource(s/es)
    // index-application-services (for reading the list of application services)
    // show-application-service (for reading the single application service)
    'permissions' => [
        'index-application-services',
        'show-application-service',
        'update-application-service',

        'index-student',
        'detail-student',
        'update-student',
        'delete-student',

        'index-user',
        'create-user',
        'detail-user',
        'update-user',
        'delete-user',

        'index-instructor',
        'create-instructor',
        'detail-instructor',
        'update-instructor',
        'delete-instructor',

        'manage-roles',
        'manage-permissions',
    ],

    'student-permissions' => [
        'detail-student',
        'update-student',
        'delete-student',
    ],
];
