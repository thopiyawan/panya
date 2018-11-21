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
            #edu{
                border: 1px solid #39518c;
                border-radius: 100px;
                padding: 10px;
                width: 90%;
                outline: none;
                font-family: 'Kanit', sans-serif;
            }
            /*@media screen and (max-width: 700px) {
                .name-con{
                    grid-template-columns: auto;
                }
            }*/
            .dropdown-el {
              min-width: 12em;
              position: relative;
              display: inline-block;
              margin-right: 1em;
              min-height: 2em;
              max-height: 2em;
              overflow: hidden;
              top: .5em;
              cursor: pointer;
              text-align: left;
              white-space: nowrap;
              color: #444;
              outline: none;
              border: .06em solid transparent;
              border-radius: 1em;
              background-color: #cde4f5;
              transition: 0.3s all ease-in-out;
            }
            .dropdown-el input {
              display: none;
            }
            .dropdown-el label {
              border-top: .06em solid #d9d9d9;
              display: block;
              height: 2em;
              line-height: 2em;
              padding-left: 1em;
              padding-right: 3em;
              cursor: pointer;
              position: relative;
              transition: 0.3s color ease-in-out;
            }
            .dropdown-el label:nth-child(2) {
              margin-top: 2em;
              border-top: .06em solid #d9d9d9;
            }
            .dropdown-el input:checked + label {
              display: block;
              border-top: none;
              position: absolute;
              top: 0;
            }
            .dropdown-el input:checked + label:nth-child(2) {
              margin-top: 0;
              position: relative;
            }
            .dropdown-el::after {
              content: "";
              position: absolute;
              right: 0.8em;
              top: 0.9em;
              border: 0.3em solid #3694d7;
              border-color: #3694d7 transparent transparent transparent;
              transition: .4s all ease-in-out;
            }
            .dropdown-el.expanded {
              border: 0.06em solid #3694d7;
              background: #fff;
              border-radius: .25em;
              padding: 0;
              box-shadow: rgba(0, 0, 0, 0.1) 3px 3px 5px 0px;
              max-height: 15em;
            }
            .dropdown-el.expanded label {
              border-top: .06em solid #d9d9d9;
            }
            .dropdown-el.expanded label:hover {
              color: #3694d7;
            }
            .dropdown-el.expanded input:checked + label {
              color: #3694d7;
            }
            .dropdown-el.expanded::after {
              transform: rotate(-180deg);
              top: .55em;
            }

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
                    <span class="dropdown-el">
                        <input type="radio" name="sortType" value="Relevance" checked="checked" id="sort-relevance"><label for="sort-relevance">Relevance</label>
                        <input type="radio" name="sortType" value="Popularity" id="sort-best"><label for="sort-best">Product Popularity</label>
                        <input type="radio" name="sortType" value="PriceIncreasing" id="sort-low"><label for="sort-low">Price Low to High</label>
                        <input type="radio" name="sortType" value="PriceDecreasing" id="sort-high"><label for="sort-high">Price High to Low</label>
                        <input type="radio" name="sortType" value="ProductBrand" id="sort-brand"><label for="sort-brand">Product Brand</label>
                        <input type="radio" name="sortType" value="ProductName" id="sort-name"><label for="sort-name">Product Name</label>
                    </span>
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
     <script type="text/javascript">
            $('.dropdown-el').click(function(e) {
              e.preventDefault();
              e.stopPropagation();
              $(this).toggleClass('expanded');
              $('#'+$(e.target).attr('for')).prop('checked',true);
            });
            $(document).click(function() {
              $('.dropdown-el').removeClass('expanded');
            });
        </script>
</html>
