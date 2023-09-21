<html>
    <style>
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
            border: 2px solid rgb(173, 173, 173) ;
            width: 500px;
            border-radius: 5px;
            background-color: rgb(241, 235, 235);
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
            background-color:  rgb(83, 83, 189);
            border: 2px;
            height: 100px;
            width: 500px;
            border-radius: 5px;
            color: white;
        }
        #secondblast{
            display: flex;
            align-self: left;
            margin-bottom: 20px;
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
            background-color:  rgb(83, 83, 189);
            border: 2px;
            border-radius: 5px;
            color: white;
        }
        #btn:hover{
            background-color:  rgb(108, 108, 224);
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
                        <label>ID:</label>
                        <input readonly value="<?php echo rand(1, 999)?>" name='application_id'><br>
                    </div>
                    <div class="raidus">
                        <label>First Name: </label>
                        <input type = "text" name = "firstname"><br>
                    </div>
                    <div class="raidus">
                        <label>Last Name: </label>
                        <input type = "text" name = "lastname"><br>
                    </div>
                    <div class="raidus">
                        <label>Email: </label>
                        <input type = "text" name = "email"><br>
                    </div>
                    <div class="raidus">
                        <label>Address: </label>
                        <input type = "text" name = "address"><br>
                    </div>
                    <div class="raidus">
                        <label>Education: </label>
                        <select name = "education">
                            <option value = "underGrad">
                                Undergraduate
                            </option>
                            <option value = "graduate">
                                Graduate
                            </option>
                        </select><br>
                    </div>
                    <div class="raidus">
                        <label>Years of experience: </label>
                        <input type = "text" name = "years_of_experience"><br>
                    </div>
                    <div class="raidus">
                        <label>Other: </label>
                        <input type = "text" name = "other"><br>
                    </div>
                    <div class="hold4">
                        <button id="btn">Submit Application</button>
                    </div>
                    
                </form>
            </div>
        </div>    
    </body>
</html>