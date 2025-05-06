<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use App\Models\Faq;
use App\Models\News;
use App\Http\Requests\StoreContactsRequest;
use App\Models\Abroad;
use App\Models\Enquiries;
use App\Models\Member;
use App\Models\Page;
use App\Models\PopUp;
use App\Models\Review;
use App\Models\Scholarship;
use App\Models\Services;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FrontendController extends Controller
{
    public function home()
    {
        $slider = Slider::where('status', 1)->orderBy('order', 'asc')->get();
        $review = Review::where("status", 1)->orderBy("order", 'asc')->get();
        $services = Services::where('status', 1)->orderBy('order', 'asc')->take(6)->get();
        $country = Abroad::where('status', 1)->orderBy('order', 'asc')->get();
        $course = Scholarship::where('status', 1)->orderBy('order', 'asc')->get();
        $blogs = News::where('status', 1)->orderBy('order', 'asc')->take(3)->get();
        $popup = PopUp::where('status', 1)->get();
        return view('frontend.home.index', compact('blogs', 'popup', 'course', 'country', 'services', 'review', 'slider'));
    }
    public function contact()
    {
        return view('frontend.contact.index');
    }
    public function contactStore(StoreContactsRequest $request)
    {
        $contact = Contacts::create($request->validated());
        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Your message has been sent successfully!',
            ]);
        }
        return redirect($request->url)->with('success', 'Your message has been sent successfully!');
    }

    public function blog()
    {
        $blogs = News::where('status', 1)
            ->orderBy('order', 'asc')
            ->paginate(6);
        $popular_blogs = News::where('status', 1)->orderBy('created_at', 'desc')->take(5)->get();
        return view('frontend.blog.index', compact('blogs', 'popular_blogs'));
    }
    public function showBlog($slug)
    {

        $blog = News::where('slug', $slug)->firstOrFail();
        $popular_blog = News::where('status', 1)->take(5)->get();
        return view('frontend.blog.show', compact('blog', 'popular_blog'));
    }
    public function country()
    {
        $country = Abroad::where('status', 1)->orderBy('order', 'asc')->get();
        return view('frontend.country.index', compact('country'));
    }
    public function showCountry($slug)
    {
        $country = Abroad::where('slug', $slug)->firstOrFail();
        $popular_country = Abroad::where('status', 1)->take(5)->get();
        return view('frontend.country.show', compact('country', 'popular_country'));
    }
    public function course()
    {
        $course = Scholarship::where('status', 1)->orderBy('order', 'asc')->get();
        return view('frontend.course.index', compact('course'));
    }
    public function showCourse($slug)
    {
        $courses = Scholarship::where('slug', $slug)->firstOrFail();
        $popular_courses = Scholarship::where('status', 1)->take(5)->get();
        return view('frontend.course.show', compact('courses', 'popular_courses'));
    }
    public function services()
    {
        $services = Services::where('status', 1)->orderBy('order', 'asc')->get();
        return view('frontend.services.index', compact('services'));
    }
    public function showService($slug)
    {
        $services = Services::where('slug', $slug)->firstOrFail();
        $popular_services = Services::where('status', 1)->take(5)->get();
        return view('frontend.services.show', compact('services', 'popular_services'));
    }
    public function testimonial()
    {
        $review = Review::where("status", 1)->orderBy("order", 'asc')->get();
        return view('frontend.testimonial.index', compact('review'));
    }
    public function teams()
    {
        $teams = Member::where('status', 1)->orderBy('order', 'asc')->get();
        return view('frontend.teams.index', compact('teams'));
    }
    public function about()
    {
        $teams = Member::where('status', 1)->orderBy('order', 'asc')->get();
        return view('frontend.about.index', compact('teams'));
    }
    public function faq()
    {
        $faqs = Faq::where('status', 1)->orderBy('order', 'asc')->get();
        return view('frontend.faq.index', compact('faqs'));
    }
    public function page($slug)
    {
        $page = Page::where('slug', $slug)->first();
        return view('frontend.pages.index', compact('page'));
    }
    function register()
    {

        return view("frontend.register.index");
    }
    public function registerstudent(Request $request)
    {
        $input = $request->all();

        $rules = [
            // Basic Info
            'full_name' => 'required|string|max:255',
            'dob' => 'required',

            // Academic Qualification
            'qualification' => 'required|string|max:255',
            'see_school_name' => 'nullable|string|max:255',
            'see_gpa' => 'nullable|string|max:255',
            'see_passed_year' => 'nullable|string|max:255',
            'plus_two_college_name' => 'nullable|string|max:255',
            'plus_two_gpa' => 'nullable|string|max:255',
            'plus_two_passed_year' => 'nullable|string|max:255',
            'bachelor_college_name' => 'nullable|string|max:255',
            'bachelor_gpa' => 'nullable|string|max:255',
            'bachelor_passed_year' => 'nullable|string|max:255',
            'master_college_name' => 'nullable|string|max:255',
            'master_gpa' => 'nullable|string|max:255',
            'master_passed_year' => 'nullable|string|max:255',

            // Additional Info
            'marital_status' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'mobile' => 'required',
            'email' => 'required|email|max:255',
            'phone2' => 'nullable|string|max:255',

            // Guardian Info
            'parents_name' => 'required|string|max:255',
            'g_address' => 'required|string|max:255',
            'g_mobile' => 'required|string|max:255',
            'g_email' => 'nullable|email|max:255',

            // Other Details
            'preferred_country' => 'required|string|max:255',
            'language_test' => 'required|string|max:255',
            'test_type' => 'nullable|string|max:255',
            'test_score' => 'nullable|string|max:255',
            'preferred_education' => 'required|string|max:255',
            'preferred_institution_name' => 'nullable|string|max:255',
            'source' => 'required|array',
            'message' => 'nullable|string',
        ];
        $customMessages = [
            'parents_name.required' => 'The Parents/Guardian Name field is required.',
            'g_address.required' => 'The Guardian Address field is required.',
            'g_mobile.required' => 'The Guardian Mobile field is required.',
        ];
        $validator = Validator::make($input, $rules, $customMessages);
        if ($validator->fails()) {
            return redirect()->route("frontend.register")->withInput()->withErrors($validator);
        } else {
            // Convert the 'dob' field from dd-mm-yyyy to yyyy-mm-dd format
            // $input['dob'] = Carbon::createFromFormat('d-m-Y', $input['dob'])->format('Y-m-d');

            // Convert the source array to a JSON string
            $input['source'] = json_encode($input['source']);

            // Insert the data into the database
            Enquiries::create($input);

            return redirect()->back()->with('success', 'Registration successful!');
        }
    }
}
