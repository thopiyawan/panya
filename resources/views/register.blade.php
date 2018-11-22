<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
             <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <meta name="csrf-token" content="{{ csrf_token() }}">


        <title>สถาบันปัญญาประชารัฐ</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Styles -->
        <style>
            body{
                margin: 0;
                background: #39518c;
                font-family: 'Kanit', sans-serif;
            }
            .center{
                width: 90%;
                margin: auto;
            }
            /*.name-con{
                display: grid;
                grid-template-columns: auto auto;
            }*/
            form{
                width: 80%;
                /*height: 70%;*/
                background-color: white;
                border-radius: 10px;
                padding: 20px;
                margin: 20px auto;
                max-width: 600px;
            }
            form > h1 {
                text-align: center;
            } 
            /*.register{
                width: 100%;
            }*/
            form input{
                border: 1px solid #39518c;
                border-radius: 100px;
                padding: 10px;
                width: 90%;
                outline: none;
                font-family: 'Kanit', sans-serif;
            }
            .submit{
                background-color: #39518c;
                color: white;
                border-radius: 100px;
                padding: 10px 20px;
                margin-top: 15px;
                border: 0;
                font-family: 'Kanit', sans-serif;
            }
            .grid{
                display: grid;
                grid-template-columns: auto auto;
                grid-gap: 10px;
            }
            .btn-con{
                text-align: center;
            }
            .grid > input{
                width: 85%;
            }
            #edu{
                border: 1px solid #39518c;
                padding: 10px;
                width: 100%;
             /*   outline: none;*/
                font-family: 'Kanit', sans-serif;
            }
            /*@media screen and (max-width: 700px) {
                .name-con{
                    grid-template-columns: auto;
                }
            }*/
        </style>
    </head>
    <body>
        <form method="post" action="/register_store" enctype="multipart/form-data">
               {{ csrf_field() }}
                <h1>สมัครเข้าร่วมสถาบันปัญญาประชารัฐ</h1>
                <div  class="center">
                <p>ชื่อ (First name)</p>
                <input type="text" name="firstname" required/>
                <p>นามสกุล (Last name)</p>
                <input type="text" name="lastname" required/>
                <p>อายุ (Age)</p>
                <input type="number" name="age" required/>
                <p>เบอร์โทรศัพท์ (Telephone number)</p>
                <input type="text" name="tel_number" required/>
                <p>อีเมล (Email)</p>
                <input type="text" name="email" required/>
                <p>ที่อยู่ (Address)</p>
                  <div class="grid">
                    <input type="text" name="addr" placeholder="บ้านเลขที่/หมู่/ซอย/ถนน (Number)" required/>
                    <input type="text" name="addr_sub_dist" placeholder="ตำบล (Sub-district)" required/>
                    <input type="text" name="addr_dist" placeholder="อำเภอ (District)" required/>
                    <input type="text" name="addr_prov" placeholder="จังหวัด (Province)" required/>
                    <input type="text" name="addr_postal_code" placeholder="รหัสไปรษณีย์ (Postal Code)" required/>
                  </div>
                <p>อาชีพ (Career)</p>
                <input type="text" name="career" required/>
                <p>ระดับการศึกษา (Education)</p>
                      <select name="edu_level" id="edu" required/>
                        <option value=""  >- กรุณาเลือกระดับการศึกษา -</option>
                        <option value="1" >ต่ำกว่ามัธยมศึกษา</option>
                        <option value="2" >ปวช./มัธยมศึกษา</option>
                        <option value="3" >ปวส.</option>
                        <option value="4" >ปริญญาตรี</option>
                        <option value="5" >ปริญญาโท</option>
                        <option value="6" >ปริญญาเอก</option>
                    </select>
                <p>คณะ (Faculty)</p>
                    <input type="text" name="edu_faculty" placeholder="คณะ (Faculty)" required/>
                <p>สาขา (Major)</p>
                    <input type="text" name="edu_major" placeholder="สาขา (Major)" required/>
                <p>โรงเรียน/มหาวิทยาลัย (Education)</p>
                    <input type="text" name="edu_place" placeholder="โรงเรียน/มหาวิทยาลัย (Education)" required/>
                  </div>          
                </div>
                <div class="btn-con">
                    <button class="submit">Submit</button>
                </div>
        </form>
    </body>
        <script src="https://d.line-scdn.net/liff/1.0/sdk.js"></script>
    <script >

               $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

      var user_id_line;
      window.onload = function (e) {
       var x = 'test';
    // init 
    // https://developers.line.me/ja/reference/liff/#initialize-liff-app
    liff.init(function (data) {
        getProfile();
        initializeApp(data);
       
    });
    
  $('.submit').on('click', function(){
                   //alert(user_id_line);
// document.getElementById('us_id').innerHTML = user_id_line;
                    var _token = $('input[name="_token"]').val(); 
                    $.ajax({
                        url:"{{route('register_store')}}",
                        method:"POST",
                         data:{user_id_line:user_id_line,_token:_token},
                         


                    }).then(function () {
                        //window.alert("ยืนยันคุณหมอประจำตัวคุณแม่");
                        liff.closeWindow()

                    })
              
            });
            
};

function getProfile(){
    // https://developers.line.me/ja/reference/liff/#liffgetprofile()
    return liff.getProfile().then(function (profile) {
        document.getElementById('useridprofilefield').textContent = profile.userId;
        document.getElementById('displaynamefield').textContent = profile.displayName;

        user_id_line =  profile.userId;


        var profilePictureDiv = document.getElementById('profilepicturediv');
        if (profilePictureDiv.firstElementChild) {
            profilePictureDiv.removeChild(profilePictureDiv.firstElementChild);
        }
        var img = document.createElement('img');
        img.src = profile.pictureUrl;
        img.alt = "Profile Picture";
        img.width = 200;
        profilePictureDiv.appendChild(img);

        document.getElementById('statusmessagefield').textContent = profile.statusMessage;
    }).catch(function (error) {
        window.alert("Error getting profile: " + error);
    });
}

function initializeApp(data) {

 
    document.getElementById('languagefield').textContent = data.language;
    document.getElementById('viewtypefield').textContent = data.context.viewType;
    document.getElementById('useridfield').textContent = data.context.userId;
    document.getElementById('utouidfield').textContent = data.context.utouId;
    document.getElementById('roomidfield').textContent = data.context.roomId;
    document.getElementById('groupidfield').textContent = data.context.groupId;
}
</script>
</html>
