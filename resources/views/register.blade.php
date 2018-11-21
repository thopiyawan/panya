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
            * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  display: flex;
  flex-direction: column;
  width: 100%;
  height: 100vh;
  align-items: center;
  justify-content: flex-start;
  font-family: 'Ek Mukta';
  text-transform: uppercase;
  font-weight: 600;
  letter-spacing: 4px;
  background: #1D1F20;
}

h1 {
  margin-top: 10vh;
  font-size: 2.5rem;
  max-width: 500px;
  letter-spacing: 3px;
  text-align: center;
  line-height: 1.5;
  font-family: 'Open Sans';
  text-transform: capitalize;
  font-weight: 800;
  color: white;
  
  span {
    color: #FF908B;
  }
}

form {
  position: relative;
  width: 18rem;
  margin-top: 8vh;
}

.chosen-value,
.value-list {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
}

.chosen-value {
  font-family: 'Ek Mukta';
  text-transform: uppercase;
  font-weight: 600;
  letter-spacing: 4px;
  height: 4rem;
  font-size: 1.1rem;
  padding: 1rem;
  background-color: #FAFCFD;
  border: 3px solid transparent;
  transition: .3s ease-in-out;
  
  &::-webkit-input-placeholder {
    color: #333;
  }
  
  &:hover {
    background-color: #FF908B;
    cursor: pointer;
    
    &::-webkit-input-placeholder {
      color: #333;
    }
  }
  
  &:focus,
  &.open {
    box-shadow: 0px 5px 8px 0px rgba(0,0,0,0.2);
    outline: 0;
    background-color: #FF908B;
    color: #000;
    
    &::-webkit-input-placeholder {
      color: #000;
    }
  }
}

.value-list {
  list-style: none;
  margin-top: 4rem;
  box-shadow: 0px 5px 8px 0px rgba(0,0,0,0.2);
  overflow: hidden;
  max-height: 0;
  transition: .3s ease-in-out;
  
  &.open {
   max-height: 320px;
   overflow: auto;
  }
  
  li {
    position: relative;
    height: 4rem;
    background-color: #FAFCFD;
    padding: 1rem;
    font-size: 1.1rem;
    display: flex;
    align-items: center;
    cursor: pointer;
    transition: background-color .3s;
    opacity: 1;
    
    &:hover {
      background-color: #FF908B;
    }
    
    &.closed {
      max-height: 0;
      overflow: hidden;
      padding: 0;
      opacity: 0;
    }
  }
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
                <form>
                  <input class="chosen-value" type="text" value="" placeholder="Type to filter">
                  <ul class="value-list">
                    <li>Alabama</li>
                    <li>Alaska</li>
                    <li>Arizona</li>
                    <li>Arkansas</li>
                    <li>California</li>
                  </ul>
                </form>
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
