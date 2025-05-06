<?php

namespace Database\Seeders;

use App\Models\Slider;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['site_main_logo', Null],
            ['site_fav_icon', Null],
            ['site_information', 'GyanMarga'],
            ['site_phone', '984-9995788'],
            ['site_email', 'info@gyanmarga.com.np'],
            ['site_location', 'Kathmandu, Nepal'],
            ['site_location_url', 'https://paradiseinfo.tech/'],
            ['site_map', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.522068845213!2d85.31823907546604!3d27.670254826203877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19ce1dace9ed%3A0xfb9c8b305818fb7d!2sKumaripati%2C%20Lalitpur!5e0!3m2!1sen!2snp!4v1742449533218!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade'],
            ['site_mail', 'info@gyanmarga.com.np'],
            ['site_url', 'info@gyanmarga.com.np'],
            ['site_copyright', 'GyanMarga'],

            // Homepage

            ['homepage_small_title', 'GyanMarga'],
            ['homepage_title', 'GyanMarga'],
            ['homepage_image', Null],
            ['homepage_description', 'GyanMarga'],
            ['homepage_seo_title', 'GyanMarga'],
            ['homepage_seo_description', 'GyanMarga'],
            ['homepage_seo_keywords', 'GyanMarga'],
            ['homepage_slider_button', 'Connect With Us'],

            ['about_title', 'About Us'],
            ['about_description', 'lorem lorem'],
            ['about_seo_description', 'lorem lorem'],
            ['about_seo_keywords', 'lorem lorem'],
            ['student_count', '2k+'],
            ['graduate_count', '98%'],
            ['gpa_count', '3.8'],
            ['about_first_image', Null],
            ['about_second_image', Null],

            ['faq_title', 'Faq'],
            ['faq_image', Null],
            ['faq_description', 'What They Wanna Know'],
            ['faq_seo_title', 'GyanMarga'],
            ['faq_seo_description', 'GyanMarga'],
            ['faq_seo_keywords', 'GyanMarga'],

            ['contact_title', 'Contact Us'],
            ['contact_image', Null],
            ['contact_section_title', "Get In Touch"],
            ['contact_description', 'GyanMarga'],
            ['contact_seo_title', 'GyanMarga'],
            ['contact_seo_description', 'GyanMarga'],
            ['contact_seo_keywords', 'GyanMarga'],
            ['contactform_title', 'Interested In Study
            Abroad?'],
            ['contactform_description', 'Provide your details, and well schedule
            a call at your convenience.'],

            // members

            ['member_title', 'GyanMarga'],
            ['member_image', Null],
            ['member_description', 'GyanMarga'],
            ['member_seo_title', 'GyanMarga'],
            ['member_seo_description', 'GyanMarga'],
            ['member_seo_keywords', 'GyanMarga'],

            ['blog_title', 'GyanMarga'],
            ['blog_image', Null],
            ['blog_description', 'GyanMarga'],
            ['blog_seo_title', 'GyanMarga'],
            ['blog_seo_description', 'GyanMarga'],
            ['blog_seo_keywords', 'GyanMarga'],

            ['gallerys_title', 'GyanMarga'],
            ['gallerys_image', Null],
            ['gallerys_description', 'GyanMarga'],
            ['gallerys_seo_title', 'GyanMarga'],
            ['gallerys_seo_description', 'GyanMarga'],
            ['gallerys_seo_keywords', 'GyanMarga'],

            ['service_title', 'GyanMarga'],
            ['service_image', Null],
            ['service_description', 'GyanMarga'],
            ['service_seo_title', 'GyanMarga'],
            ['service_seo_description', 'GyanMarga'],
            ['service_seo_keywords', 'GyanMarga'],

            ['location_title', 'GyanMarga'],
            ['location_image', Null],
            ['location_description', 'GyanMarga'],
            ['location_seo_title', 'GyanMarga'],
            ['location_seo_description', 'GyanMarga'],
            ['location_seo_keywords', 'GyanMarga'],

            ['abroads_title', 'GyanMarga'],
            ['abroads_image', Null],
            ['abroads_description', 'GyanMarga'],
            ['abroads_seo_title', 'GyanMarga'],
            ['abroads_seo_description', 'GyanMarga'],
            ['abroads_seo_keywords', 'GyanMarga'],

            // scholorship
            ['scholorship_title', 'Scholarships'],
            ['scholorship_image', Null],
            ['scholorship_description', 'Scholarships to Study Abroad'],
            ['scholorship_seo_title', 'GyanMarga'],
            ['scholorship_seo_description', 'GyanMarga'],
            ['scholorship_seo_keywords', 'GyanMarga'],

            // Blogs
            ['blogs_title', 'Blogs'],
            ['blogs_image', Null],
            ['blogs_description', 'Watch Our Recent Blogs'],
            ['blogs_seo_title', 'GyanMarga'],
            ['blogs_seo_description', 'GyanMarga'],
            ['blogs_seo_keywords', 'GyanMarga'],

            ['video_title', 'GyanMarga'],
            ['video_image', Null],
            ['video_description', 'GyanMarga'],
            ['video_seo_title', 'GyanMarga'],
            ['video_seo_description', 'GyanMarga'],
            ['video_seo_keywords', 'GyanMarga'],

            // This is testimonials
            ['testimonials_title', 'Testimonials'],
            ['testimonials_image', Null],
            ['testimonials_description', 'What They Say About Us'],
            ['testimonials_seo_title', 'GyanMarga'],
            ['testimonials_seo_description', 'GyanMarga'],
            ['testimonials_seo_keywords', 'GyanMarga'],

            // testpreperation
            ['testpreperation_title', 'Test Preparation'],
            ['testpreperation_image', Null],
            ['testpreperation_description', 'We Provide Courses Tailored for Tomorrow.'],
            ['testpreperation_seo_title', 'GyanMarga'],
            ['testpreperation_seo_description', 'GyanMarga'],
            ['testpreperation_seo_keywords', 'GyanMarga'],

            // get in touch
            ['getintouch_title', 'Get In Touch'],
            ['getintouch_image', Null],
            ['getintouch_description', 'we are dedicated to [briefly describe the core mission or services of Fusion Education Consultancy, e.g.,
            providing personalized educational solutions, enhancing learning outcomes, etc.].'],
            ['getintouch_seo_title', 'GyanMarga'],
            ['getintouch_seo_description', 'GyanMarga'],
            ['getintouch_seo_keywords', 'GyanMarga'],

            // review
            ['review_title', 'GyanMarga'],
            ['review_image', Null],
            ['review_description', 'GyanMarga'],
            ['review_seo_title', 'GyanMarga'],
            ['review_seo_description', 'GyanMarga'],
            ['review_seo_keywords', 'GyanMarga'],

            ['partner_title', 'GyanMarga'],
            ['partner_image', Null],
            ['partner_description', 'GyanMarga'],
            ['partner_seo_title', 'GyanMarga'],
            ['partner_seo_description', 'GyanMarga'],
            ['partner_seo_keywords', 'GyanMarga'],

            ['download_title', 'GyanMarga'],
            ['download_image', Null],
            ['download_description', 'GyanMarga'],
            ['download_seo_title', 'GyanMarga'],
            ['download_seo_description', 'GyanMarga'],
            ['download_seo_keywords', 'GyanMarga'],

            ['homepage_counter1', 'Successful Cases'],
            ['homepage_counter2', 'Countries Covered'],
            ['homepage_counter3', 'Success Rate'],
            ['homepage_counter4', 'Years Experience'],
            ['homepage_countervalue1', '5000'],
            ['homepage_countervalue2', '30'],
            ['homepage_countervalue3', '98'],
            ['homepage_countervalue4', '15'],

            ['homepage_contactimage', Null],
            ['homepage_contacttitle', 'Request a Consultation'],
            ['homepage_testimonials', 'Testimonials'],
            ['homepage_testimonialsbanner', Null],


            ['about_counter1', 'Successful Cases'],
            ['about_counter2', 'Countries Covered'],
            ['about_counter3', 'Success Rate'],
            ['about_counter4', 'Years Experience'],
            ['about_countervalue1', '5000'],
            ['about_countervalue2', '30'],
            ['about_countervalue3', '98'],
            ['about_countervalue4', '15'],
            ['aboutpage_title', 'About the Company'],
            ['aboutpage_description', 'About the Company'],
            ['aboutpage_image', Null],
            ['aboutpage_bannerimage', Null],


            ['team_bannerimage', Null],
            ['services_bannerimage', Null],
            ['testimonials_bannerimage', Null],
            ['country_bannerimage', Null],
            ['course_bannerimage', Null],
            ['blog_bannerimage', Null],
            ['contact_bannerimage', Null],
            ['faq_bannerimage', Null],



        ];

        if (count($items)) {
            foreach ($items as $item) {
                \App\Models\Setting::create([
                    'key' => $item[0],
                    'value' => $item[1],
                ]);
            }
        }

        User::updateOrCreate(
    ['email' => 'admin@travel.com'], // Check by unique email
    [
        'name' => 'Super Admin',
        'password' => Hash::make('Nepal@123'), // You can change the password if needed
    ]
);


        // Sliders
       Slider::updateOrCreate(
    ['name' => 'Empowering Minds: Your Pathway to Educational Excellence'], // Check by unique name
    [
        'description' => 'Welcome to Empowering Minds, where we unlock your full potential. Our dedicated team offers personalized support for academic success, college admissions, and test preparation. Let\'s embark on your journey to excellence together',
    ]
);

    }
}
