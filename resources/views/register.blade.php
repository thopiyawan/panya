<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <title>สถาบันปัญญาประชารัฐ</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">

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
      /*      #edu{
                border: 1px solid #39518c;
                border-radius: 100px;
                padding: 10px;
                width: 90%;
                outline: none;
                font-family: 'Kanit', sans-serif;
            }*/
            /*@media screen and (max-width: 700px) {
                .name-con{
                    grid-template-columns: auto;
                }
            }*/
        </style>
    </head>
    <body>
        <form>
                <h1>สมัครเข้าร่วมสถาบันปัญญาประชารัฐ</h1>
                <div  class="center">
                <p>ชื่อ (Name)</p>
                 <div class="grid">
                    <input type="text" placeholder="ชื่อ (First name)" required/>
                    <input type="text" placeholder="นามสกุล (Last name)" required/>
                  </div>   
                <p>อายุ (Age)</p>
                <input type="text" required/>
                <p>เบอร์โทรศัพท์ (Telephone number)</p>
                <input type="text" required/>
                <p>อีเมล (Email)</p>
                <input type="text" required/>
                <p>ที่อยู่ (Address)</p>
                  <div class="grid">
                    <input type="text" placeholder="บ้านเลขที่/หมู่/ซอย/ถนน (Number)" required/>
                    <input type="text" placeholder="ตำบล (Sub-district)" required/>
                    <input type="text" placeholder="อำเภอ (District)" required/>
                    <input type="text" placeholder="จังหวัด (Province)" required/>
                    <input type="text" placeholder="รหัสไปรษณีย์ (Postal Code)" required/>
                  </div>
                <p>อาชีพ (Career)</p>
                <input type="text" required/>
                <p>การศึกษา (Education)</p>
                  <div class="grid">
                
                    

                          <!-- Custom select structure --> 
                        <div class="select_mate" data-mate-select="active" >
                        <select name="" onchange="" onclick="return false;" id="">
                        <option value=""  >Seleciona una Opcion </option>
                        <option value="1">Select option 1</option>
                        <option value="2" >Select option 2</option>
                        <option value="3">Select option 3</option>
                          </select>
                        <p class="selecionado_opcion"  onclick="open_select(this)" ></p><span onclick="open_select(this)" class="icon_select_mate" ><svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/>
                            <path d="M0-.75h24v24H0z" fill="none"/>
                        </svg></span>
                        <div class="cont_list_select_mate">
                          <ul class="cont_select_int">  </ul> 
                        </div>
                          </div>
                


    
                    <input type="text" placeholder="คณะ (Faculty)" required/>
                    <input type="text" placeholder="สาขา (Major)" required/>
                    <input type="text" placeholder="โรงเรียน/มหาลัย" required/>
                  </div>          
                </div>
                <div class="btn-con">
                    <button class="submit">Submit</button>
                </div>
        </form>
    </body>
</html>
