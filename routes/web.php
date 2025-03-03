<?php

use App\Events\NewMessage;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SampleController;
use App\Jobs\SendWelcomeEmail;
use App\Mail\SendMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;





//Dependency Injection
Route::resource('test', SampleController::class);




//Broadcasting
// Route::get('messages', function(){
//     return view('messages');
// });

// Route::get('send-message', function(){
//     event(new NewMessage('Hello World!'));

//     dd('Message sent');
// });






//Observers
//Route::resource('posts', PostController::class);





//JOBS
// Route::get('/send', function(){
//     $user = User::find();

//     //calling job in background
//     dispatch(new SendWelcomeEmail($user));
// });




//EMAIL
// Route::get('send-mail', function(){
//     return view('send-mail');
// });

// Route::post('send-mail', function(Request $request){

//     // Mail::raw($request->message, function($message) use ($request){
//     //     $message->to($request->email)->subject('Laravel Test Email 2.')
//                     ->from('test@gmail.com', 'Test');
//     // });


//     //when create php artisan make:mail SendMail
//     //Mail::to($request->email)->send(new SendMail($request->message));
//     //dd($request->all());


//     //Queue email for fast user expirience
//     Mail::to($request->email)->queue(new SendMail($request->message));
//     //to star queue worker -> php artisan queue:work 
//     //it store mails in queue in database in jobs table and after senting delete it from table
//     //when hosting app we must have supervisor which is gone call command php artisan queue:work

// })->name('send.mail');


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/user/dashboad', function(){

//     // $user = Auth::user();
//     // if(Auth::check()){
//     //     dd($user->email);
//     // }

//     return view('user-dashboard');

// })->name('user.dashboard')->middleware('auth');

// Route::group(['middleware' => ['auth']], function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';

//////////////////////////////////////////////////////////////////////////////

// <?php

// use App\Http\Controllers\BlogController;
// use App\Http\Controllers\ContactController;
// use App\Http\Controllers\FileUploadController;
// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\PostController;
// use App\Http\Controllers\SingleActionController;
// use App\Http\Middleware\CheckRoleMiddleware;
// use App\Models\Address;
// use App\Models\Blog;
// use App\Models\Contry;
// use App\Models\MyBlog;
// use App\Models\State;
// use Illuminate\Support\Facades\Route;
// use App\Models\User;
// use Faker\Extension\CountryExtension;

// Route::get('/', [HomeController::class, 'index']);

// Route::get('contact', [ContactController::class, 'index'])->name('contact.index');

// Route::post('contact', [ContactController::class, 'contactSubmit'])->name('contact.submit');

// Route::get('/file-upload', [FileUploadController::class, 'index'])->name('file.upload');
// Route::post('/file-upload', [FileUploadController::class, 'store'])->name('file.store');

// Route::get('file-download', [FileUploadController::class, 'download'])->name('file.download');

// Route::get('relation', function(){

//     $users = User::all();
//     $address = Address::all();


//     return view('test', compact('users', 'address'));
// });


// Route::get('user/dashboard', function(){
//     dd('User Dashboard');
// })->middleware('checkRole:user'); // ('checkRole:user') passing $role to the middleware
// Route::get('admin/dashboard', function(){
//     dd('Admin Dashboard');
// })->middleware('checkRole:admin');



// Route::group(['middleware' => CheckRoleMiddleware::class], function(){
    
//     Route::get('/post', [PostController::class, 'index'])->name('post.index');
//     Route::post('/post', [PostController::class, 'store'])->name('post.store');
//         // ->middleware(CheckRoleMiddleware::class); //just on 1 route
//         //in Route::gruop we are implementing middleware in all routes
// });

//implement middleware in PostController->
//implement middleware in bootstrap->app.php - global
// Route::get('/post', [PostController::class, 'index'])->name('post.index');
//             //->middleware('test-group'); //this is middleware group from bootsrap->app.php
// Route::post('/post', [PostController::class, 'store'])->name('post.store');


// Route::get('location', function(){

//     // $country = new Contry();
//     // $country->name = "US";
//     // $country->save();

//     // $country = new Contry(['name' => 'US']);
//     // $country->save();

//     // $state = new State(['name' => 'Calfornia']);
//     // $country->states()->save($state);
   
//     // $state->cities()->createMany([
//     //     ['name' => 'Los Angeles'],
//     //     ['name' => 'San Franciiso']
//     // ]);

//     $country = Contry::first();



//     return view('location', compact('country'));
// });

// Route::get('image', function(){
//     // $user = User::find(1);
//     // $user->image()->create([
//     //     'path' => '/upload/user_one.jpg'
//     // ]);

//     // $blog = MyBlog::find(1);
//     // $blog->image()->create([
//     //     'path' => '/upload/blog_one.jpg'
//     // ]);
//     //dd($user);

// });

// Route::get('/about', [HomeController::class, 'showAboutPage']);

// Route::get('/single-action', SingleActionController::class);

//blog

// Route::post('/blog/create', [BlogController::class, 'create'])->name('blog.create');
// Route::get('/blog/show', [BlogController::class, 'show'])->name('blog.show');
// Route::post('/blog/create', [BlogController::class, 'create'])->name('blog.create');
// Route::post('/blog/create', [BlogController::class, 'create'])->name('blog.create');

//Defining multiple routes for performing CRUD.Instead of manually defining each individual route for each CRUD operation
// Route::resource('/blog', BlogController::class);

// Route::get('/blog', function(){
//     $blogs = MyBlog::all(); //SELECT * FROM blogs;
//     dd($blogs);
// });

//Passing data to view
// Route::get('/contact', function(){

//     $title= "Contact Page!";
//     $description = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum";

//     $books = ["Deep work", "Steal like a artist", "Story Brand"];

//     return view('contact.index', ['title' => $title, 'description' => $description, 'books' => $books]);
// });

// Route::get('/about', function(){
//     return "This is a About page";
// })->name('about');

// Route::get('/user/{id}/{slug}', function($id, $slug){
//     return "Hello user " . $id . "-" . $slug;
// })->name('user');

// Route::group(['prefix' => 'blog' ,'as' => 'blog.'], function() {
//     Route::get('/create', function(){
//         return "Blog Create Page";
//     })->name('create');

//     Route::get('/edit', function(){
//         return "Blog Edit Page";
//     })->name('edit');

//     Route::get('/show', function(){
//         return "Blog Show Page";
//     })->name('show');
// });

//GET, POST, DELETE, PATCH, PUT

// Route::get('get-route', function(){
//     return;
// });

// Route::post('post-route', function(){
//     return;
// });

// Route::put('put-route', function(){
//     return;
// });

// Route::patch('patch-route', function(){
//     return;
// });

// Route::delete('delete-route', function(){
//     return;
// });

//Fallback route
//PUT IT AT THE BOOTOM
// Route::fallback(function(){
//     return "Oooops we couldnt find page!";
// });