<html>
    <style>
        body{
            background-color: #B2ECFF;
        }
        .hold1{
            display: flex;
            justify-content: center;
            flex-direction: row;
            align-content: center;
        }
        .hold2{
            display: flex;
            justify-content: center;
            flex-direction: row;
            align-content: center;

        }
        .hold3{
            display: flex;
            justify-content: center;
            align-items: center;
            border: 2px solid #419BBD ;
            width: 500px;
            border-radius: 5px;
            background-color: #B3CAD6;
        }
        .hold4{
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 30px;
        }
        #title{   
            display: flex;      
            justify-content: center;
            align-items: center;   
            background-color:  #530EC4;
            border: 2px;
            height: 100px;
            width: 500px;
            border-radius: 5px;
            color: white;
        }
        .id{
            border: transparent;
            background-color: #B3CAD6;
            font-size: 25px;
            width: 50px;

        }        
        #secondblast{
            display: flex;
            align-self: left;
            margin-bottom: 20px;
            margin-left: 90px;
            margin-top: 20px;
            
        }
        .raidus{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
            margin-bottom: 20px; 
        }
        #btn{
            height: 50px;
            width: 150px;
            background-color:  #530EC4;
            border: 2px;
            border-radius: 5px;
            color: white;
        }
        #btn:hover{
            background-color:  #316579;
        }
    </style>
    <body> 
        <div class="hold1">
                <h1 id="title">Job Application</h1>
        </div>
        <div class="hold2">
            <div class="hold3">
                <form action ='{{ url("api/applications") }}'method = "POST">
                    <div id="secondblast">
                        <label class="id">ID:</label>
                        <input class="id" value="<?php echo rand(1, 999)?>" name='application_id'><br>
                    </div>
                    <div class="raidus">
                        <label>First Name: </label>
                        <input type = "text" name = "firstname" class="input"><br>
                    </div>
                    <div class="raidus">
                        <label>Last Name: </label>
                        <input type = "text" name = "lastname" class="input"><br>
                    </div>
                    <div class="raidus">
                        <label>Email: </label>
                        <input type = "text" name = "email" class="input"><br>
                    </div>
                    <div class="raidus">
                        <label>Address: </label>
                        <input type = "text" name = "address" class="input"><br>
                    </div>
                    <div class="raidus">
                        <label>Education: </label>
                        <select name = "education" class="input">
                            <option value = "underGrad">
                                Undergraduate
                            </option>
                            <option value = "graduate">
                                Graduate
                            </option>
                        </select><br>
                    </div>
                    <div class="raidus">
                        <label>Years of Experience: </label>
                        <input type = "text" name = "years_of_experience" class="input"><br>
                    </div>
                    <div class="raidus">
                        <label>Other: </label>
                        <input type = "text" name = "other" class="input"><br>
                    </div>
                    <div class="hold4">
                        <button id="btn">Submit Application</button>
                    </div>
                    
                </form>
            </div>
        </div>    
    </body>
</html>