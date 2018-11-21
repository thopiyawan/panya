<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <title>สถาบันปัญญาประชารัฐ</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
        <script type="text/javascript">
                window.onload = function(){
                  crear_select();
                }

                function isMobileDevice() {
                    return (typeof window.orientation !== "undefined") || (navigator.userAgent.indexOf('IEMobile') !== -1);
                };

                 
                var li = new Array();
                function crear_select(){
                var div_cont_select = document.querySelectorAll("[data-mate-select='active']");
                var select_ = '';
                for (var e = 0; e < div_cont_select.length; e++) {
                div_cont_select[e].setAttribute('data-indx-select',e);
                div_cont_select[e].setAttribute('data-selec-open','false');
                var ul_cont = document.querySelectorAll("[data-indx-select='"+e+"'] > .cont_list_select_mate > ul");
                 select_ = document.querySelectorAll("[data-indx-select='"+e+"'] >select")[0];
                 if (isMobileDevice()) { 
                select_.addEventListener('change', function () {
                 _select_option(select_.selectedIndex,e);
                });
                 }
                var select_optiones = select_.options;
                document.querySelectorAll("[data-indx-select='"+e+"']  > .selecionado_opcion ")[0].setAttribute('data-n-select',e);
                document.querySelectorAll("[data-indx-select='"+e+"']  > .icon_select_mate ")[0].setAttribute('data-n-select',e);
                for (var i = 0; i < select_optiones.length; i++) {
                li[i] = document.createElement('li');
                if (select_optiones[i].selected == true || select_.value == select_optiones[i].innerHTML ) {
                li[i].className = 'active';
                document.querySelector("[data-indx-select='"+e+"']  > .selecionado_opcion ").innerHTML = select_optiones[i].innerHTML;
                };
                li[i].setAttribute('data-index',i);
                li[i].setAttribute('data-selec-index',e);
                // funcion click al selecionar 
                li[i].addEventListener( 'click', function(){  _select_option(this.getAttribute('data-index'),this.getAttribute('data-selec-index')); });

                li[i].innerHTML = select_optiones[i].innerHTML;
                ul_cont[0].appendChild(li[i]);

                    }; // Fin For select_optiones
                  }; // fin for divs_cont_select
                } // Fin Function 



                var cont_slc = 0;
                function open_select(idx){
                var idx1 =  idx.getAttribute('data-n-select');
                  var ul_cont_li = document.querySelectorAll("[data-indx-select='"+idx1+"'] .cont_select_int > li");
                var hg = 0;
                var slect_open = document.querySelectorAll("[data-indx-select='"+idx1+"']")[0].getAttribute('data-selec-open');
                var slect_element_open = document.querySelectorAll("[data-indx-select='"+idx1+"'] select")[0];
                 if (isMobileDevice()) { 
                  if (window.document.createEvent) { // All
                  var evt = window.document.createEvent("MouseEvents");
                  evt.initMouseEvent("mousedown", false, true, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null);
                    slect_element_open.dispatchEvent(evt);
                } else if (slect_element_open.fireEvent) { // IE
                  slect_element_open.fireEvent("onmousedown");
                }else {
                  slect_element_open.click();
                }
                }else {

                  
                  for (var i = 0; i < ul_cont_li.length; i++) {
                hg += ul_cont_li[i].offsetHeight;
                }; 
                 if (slect_open == 'false') {  
                 document.querySelectorAll("[data-indx-select='"+idx1+"']")[0].setAttribute('data-selec-open','true');
                 document.querySelectorAll("[data-indx-select='"+idx1+"'] > .cont_list_select_mate > ul")[0].style.height = hg+"px";
                 document.querySelectorAll("[data-indx-select='"+idx1+"'] > .icon_select_mate")[0].style.transform = 'rotate(180deg)';
                }else{
                 document.querySelectorAll("[data-indx-select='"+idx1+"']")[0].setAttribute('data-selec-open','false');
                 document.querySelectorAll("[data-indx-select='"+idx1+"'] > .icon_select_mate")[0].style.transform = 'rotate(0deg)';
                 document.querySelectorAll("[data-indx-select='"+idx1+"'] > .cont_list_select_mate > ul")[0].style.height = "0px";
                 }
                }

                } // fin function open_select

                function salir_select(indx){
                var select_ = document.querySelectorAll("[data-indx-select='"+indx+"'] > select")[0];
                 document.querySelectorAll("[data-indx-select='"+indx+"'] > .cont_list_select_mate > ul")[0].style.height = "0px";
                document.querySelector("[data-indx-select='"+indx+"'] > .icon_select_mate").style.transform = 'rotate(0deg)';
                 document.querySelectorAll("[data-indx-select='"+indx+"']")[0].setAttribute('data-selec-open','false');
                }


                function _select_option(indx,selc){
                 if (isMobileDevice()) { 
                selc = selc -1;
                }
                    var select_ = document.querySelectorAll("[data-indx-select='"+selc+"'] > select")[0];

                  var li_s = document.querySelectorAll("[data-indx-select='"+selc+"'] .cont_select_int > li");
                  var p_act = document.querySelectorAll("[data-indx-select='"+selc+"'] > .selecionado_opcion")[0].innerHTML = li_s[indx].innerHTML;
                var select_optiones = document.querySelectorAll("[data-indx-select='"+selc+"'] > select > option");
                for (var i = 0; i < li_s.length; i++) {
                if (li_s[i].className == 'active') {
                li_s[i].className = '';
                };
                li_s[indx].className = 'active';

                };
                select_optiones[indx].selected = true;
                  select_.selectedIndex = indx;
                  select_.onchange();
                  salir_select(selc); 
                }


        </script>>
        <!-- Styles -->
        <style>
           .cont_select_center {
              position: absolute;
              left: 50%;
              top:50%;
              margin-top: -30px;
              margin-left: -150px;
              
            }

            .cont_heg_50 {
              position: absolute;
              height: 50%;
              left: 0;
              top: 0;
              width: 100%;
            background-color: #fd7b52;
              
            }
            /* ///  END DECORATION CSS  ///  */

            .icon_select_mate {
              position: absolute;
              top:20px;
              right: 2%;
              font-size: 16px;
                height: 22px;
              transition: all 275ms;
              
            }

            .select_mate {
              position: relative;
              float: left;
              
              min-width: 300px;
              width: 300px;
              min-height: 60px;
              font-family: 'Roboto';
              color: #777;
              font-weight: 300;
              background-color: #fff;
              box-shadow: 1px 2px 10px -2px rgba(0,0,0,0.3);
              border-radius: 3px;
              transition: all 375ms ease-in-out;
              border-radius:500px;
            /* Oculto el elemento select */
              select {
              position: absolute;
              overflow: hidden;
              height: 0px;
              opacity: 0;  
                z-index: -1;
                
              }
            }

            .cont_list_select_mate {
              position: relative;
              float: left;
              width: 100%;
              
            }

            .cont_select_int {
             position: absolute;
              left: 0px;
              top: 0px;
              z-index: 999;
              overflow: hidden;
              height: 0px;
              width: 85%;
              margin-left:7%;
              background-color: #fff;
              padding: 0px;
              margin-bottom: 0px;
              margin-top: 0px;
              border-radius: 0px 0px 3px 3px;
              box-shadow: 1px 4px 10px -2px rgba(0, 0, 0, 0.2);
              transition: all 375ms ease-in-out;

                li {
                position: relative;

                width: 100%;
                border-bottom:1px solid #E0E0E0;
                background-color: #F5F5F5;
                list-style-type: none;
                padding: 10px 2%;
                margin: 0px;  
                transition: all 275ms ease-in-out;
                display: block;
                cursor:pointer;
                
                    
                    &:last-child {
                    border-radius: 3px;
                    border-bottom:0px; 

                    }
                     &:hover {
                    background-color: #EEEEEE;
                     } 
                 }

               .active {
               background-color: #EEEEEE;
               }

            }

            /* etiqueta <p> con la opcion selecionada  */
            .selecionado_opcion {
                padding: 20px 2%;
                width: 96%;
                display: block;
                margin: 0px;
                cursor: pointer;
            }
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
       
            /*@media screen and (max-width: 700px) {
                .name-con{
                    grid-template-columns: auto;
                }
            }*/
            /* ///  DECORATION CSS ///  */
         
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
                    <div class="select_mate" data-mate-select="active" >
                       <!--  <select name="" onchange="" onclick="return false;" id="">
                        <option value=""  >Seleciona una Opcion </option>
                        <option value="1">Select option 1</option>
                        <option value="2" >Select option 2</option>
                        <option value="3">Select option 3</option>
                          </select> -->
                        <p class="selecionado_opcion"  onclick="open_select(this)" ></p><span onclick="open_select(this)" class="icon_select_mate" ><svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/>
                            <path d="M0-.75h24v24H0z" fill="none"/>
                        </svg></span>
                        <div class="cont_list_select_mate">
                          <ul class="cont_select_int">  </ul> 
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
