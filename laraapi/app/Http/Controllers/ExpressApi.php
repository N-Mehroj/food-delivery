<?php

    namespace App\Http\Controllers;
    use Illuminate\Http\Request;

    use App\Mail\MessageNotify;
    use Illuminate\Support\Facades\Mail;

    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Facades\Auth;

    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Validator;
    use Illuminate\Support\Str;

    // use App\Http\Controllers\ChackConroller;

    use App\Models\User;
    use App\Models\Product;
    use App\Models\Restorans;
    use App\Models\Besket;
    use App\Models\Notifi;
    use App\Models\Orders;
    use App\Models\Owners;



    class Expressapi extends Controller
    {
        function getData(){

            return['name'=> 'ali'];
        }

        // public function __construct(ChackController $chackController) {
        //     $this->chackController = $chackController;
        // }
        public function signup(Request $request)
        {
            $data = $request->all();

            $token = random_bytes(8);
            $token = bin2hex($token);

            $recdata = json_decode(json_encode($data), true);
            // return $recdata['signUpData'];

            $dataObj = $recdata['user'];
            // $dataObj =  $recdata->get('firstName');


                $fullName = $dataObj['fullName'];
                $email = $dataObj['email'];
                $password = $dataObj['password'];
                $status = $dataObj['type'];



            //  return $phoneNumber.' '.$password.' '.$firstName.' '.$lastName.' '.$email;
            // return $recdata['signUpData']['firstName'];

              $validator = Validator::make($dataObj, [
                        'fullName' => 'required|min:3',
                        'email' => 'required|unique:users,email',
                        // 'phoneNumber' => 'required',
                        'password' => 'required|min:6',
                    ]);
            if ($validator->fails()) { return response()->json(['errors' => $validator->errors()], 400); }

            $user = new User([
                'full_name' => $fullName,
                'email' => $email,
                'password' => Hash::make($password),
                'token' => $token,
                'status' => $status
            ]);
            $user->save();

            return response()->json(['message' => 'User saved successfully' , 'user' => $user], 201);

        }
        public function phone(Request $request)
        {
            $data = $request->all();

            $recdata = json_decode(json_encode($data), true);
            $dataObj = $recdata['phone'];
            // return $dataObj;
            $UpdateDetails = User::where('token', '=',  $dataObj['token'])->first();
            $UpdateDetails->phone = $dataObj['phone'];
            $UpdateDetails->save();

            return response()->json(['message' => 'Phone number add successfully' ], 201);
        }
        // public function login(Request $request){
        //     $data = $request->all();
        //     $recdata = json_decode(json_encode($data), true);

        //     $phoneNumber = $recdata['userlogin']['phone'];
        //     $password = $recdata['userlogin']['password'];

        //     if (Auth::attempt(['phone' => $phoneNumber, 'password' => $password])){
        //         // $recdata->session()->regenerate();
        //         return response($recdata);
        //      }
        //         // return $phoneNumber.' '.$password;
        //         // return Auth::check();

        //     //  return response()->json(['errors' => 'Noto\'g\'ri email yoki parol'], 401);

        // }

        public function login (Request $request) {
            $data = $request->all();


            $recdata = json_decode(json_encode($data), true);
            $dataObj = $recdata['userLogin'];
            $email = $dataObj['email'];
            $password = $dataObj['password'];
            // return $recdata['signUpData'];


            $validator = Validator::make($dataObj, [
                'email' => 'required',
                'password' => 'required|min:6'
            ]);
            if ($validator->fails()){
                return response(['errors'=>$validator->errors()->all()], 422);
            }
            $user = User::where('email', $email)->first();
            if ($user) {
                if (Hash::check($password, $user->password)) {
                    // $token = $user->createToken('Laravel Password Grant Client')->accessToken;
                    return response()->json(['message' => 'Tizimga kirildi',$user], 200);
                } else {
                    $response = ["message" => "Parol xatto kiritingiz"];
                    return response($response, 422);
                }
            } else {
                $response = ["message" =>'email pochtangiz topilmadi'];
                return response($response, 422);
            }
        }

        public function logout (Request $request) {
            $token = $request->user()->token();
            $token->revoke();
            $response = ['message' => 'You have been successfully logged out!'];
            return response($response, 200);
        }
        public function allUserData (Request $request) {
            $users = User::all();
            return $users;
        }

        public function owlogin (Request $request){
            $data = $request->all();

            $recdata = json_decode(json_encode($data), true);
            $dataObj = $recdata['loginData'];
            $email = $dataObj['email'];
            $password = $dataObj['password'];
            // return $recdata['signUpData'];


            $validator = Validator::make($dataObj, [
                'email' => 'required',
                'password' => 'required|min:6'
            ]);

            if ($validator->fails()){
                return response(['errors'=>$validator->errors()->all()], 422);
            }

            $ower = Owners::where('ad_email', $email)->first();
            if ($ower) {

                if (Hash::check($password, $ower->ad_password)) {
                    // $token = $user->createToken('Laravel Password Grant Client')->accessToken;
                    if (0 == $ower->ad_verifiy) {
                        $token = Str::random(32);
                        $urlToken = Hash::make($token);
                        $urlToken = str_replace("/","00001111",$urlToken);

                        // $owerdata = Owners::where('ad_email', $email)->first();
                        $ower->ad_verified_code = $token;
                        $ower->ad_url = $urlToken;
                        $ower->save();
                        Mail::to($email)->send(new MessageNotify($data,$token,$urlToken));

                        return response()->json($dataObj);
                    }else{
                        return response()->json(['message' => 'Tizimga kirildi',$ower], 200);
                    }

                } else {
                    $response = ["message" => "Parol xatto kiritingiz"];
                    return response($response, 422);
                }
            } else {
                $response = ["message" =>'Email pochtangiz topilmadii'];
                return response($response, 422);
            }
        }

         public function TestAutentification() {
            $users = Owners::all();
            return response()->json(['message' => 'Tizimga kirildi',$users], 200);
        }


    }
