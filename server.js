


//libraries to use
const express = require('express');
const app =express();
const body_parser =require('body-parser');

const mysql = require('mysql');


//modules exports

app.use(body_parser.json({limit:'10mb',type:'application/json'}));
app.use(body_parser.urlencoded({extended:true}));

const con = mysql.createConnection({
    host: "localhost",
    database :"tracking_monitoring",
    user: "root",
    password: ""
  });

  con.connect(function(err ,) {
    if (err) throw err;
    console.log("Connected to MySQL database");
  });



app.post('/v1/incidence-report/login',(req,res)=>{

    let login =req.body;

    console.log('Login User');
    res.send('New Login');

});

app.post('/v1/incidence-report/register',(req,res)=>{

    let register =req.body;
    console.log('register User');
    res.send("New User Registered");

});
app.post('/v1/incidence-report/alert',(req,res)=>{
    let alert =req.body;
    console.log('An Alert have been Raise');
    res.send('An Alert have been Raise');

});
app.post('/v1/incidence-report/send_report',(req,res)=>{
    let sendReport =req.body;

    if (Object.keys(sendReport).length===0) {

        res.send('Empty Request Body');
    }


    else{

        res.send("Results received")
        console.log('Request Received')

        //  var sql ="INSERT INTO incidence_report(incidence_type, location,affected_persons,statement,incidence_cause,photos_of_events) VALUES  ?";
         var sql ="INSERT INTO incidents SET ?";

         con.query(sql,sendReport ,(err,res)=>{
             //check if it was succesffully inserted
             if (err) throw err;
             console.log("1 record inserted");

         });
        }

});

app.listen(3030,()=>console.log('Listenning to port 3030'));



