<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<title>unit9-_questionnaire --Chauncy</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="/css/Homework3.css" />
<link rel="stylesheet" href="/css/Raleway.css" />
<link rel="icon" href="default">
<script type="text/javascript" src="http://162.105.146.180:8081/js/jquery.min.js"></script>
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<ul class="navbar">
  <li><a style="padding-top:16px;padding-bottom:16px"  href="http://162.105.146.180:8081/main.html">Main</a></li>
  <li><a style="padding-top:16px;padding-bottom:16px"  href="http://162.105.146.180:8081/index.html">Homeworks</a></li>
  <li><a style="padding-top:16px;padding-bottom:16px"  href="http://162.105.146.180:8081/contact.html">Contact</a></li>
  <li class="dropdown-hover">
    <a style="padding-top:16px;padding-bottom:16px">Quick Nav</a>
    <div class="block-4 dropdown-content">
      <a style="padding-top:16px;padding-bottom:16px"  href="http://162.105.146.180:8081/index.html#unit1">Unit 1</a>
      <a style="padding-top:16px;padding-bottom:16px"  href="http://162.105.146.180:8081/index.html#unit2">Unit 2</a>
      <a style="padding-top:16px;padding-bottom:16px"  href="http://162.105.146.180:8081/index.html#unit3">Unit 3</a>
      <a style="padding-top:16px;padding-bottom:16px"  href="http://162.105.146.180:8081/index.html#unit4">Unit 4</a>
      <a style="padding-top:16px;padding-bottom:16px"  href="http://162.105.146.180:8081/index.html#unit5">Unit 5</a>
      <a style="padding-top:16px;padding-bottom:16px"  href="http://162.105.146.180:8081/index.html#unit6">Unit 6</a>
      <a style="padding-top:16px;padding-bottom:16px"  href="http://162.105.146.180:8081/index.html#unit7">Unit 7</a>
      <a style="padding-top:16px;padding-bottom:16px"  href="http://162.105.146.180:8081/index.html#unit8">Unit 8</a>
      <a style="padding-top:16px;padding-bottom:16px"  href="http://162.105.146.180:8081/index.html#unit9">Unit 9</a>
    </div>
  </li>
</ul>

<body class="light-grey">
  <div class="content" style="max-width:1400px">
<!-- Header -->
<header class="container center" style="padding-top:32px;padding-bottom:32px" > 
  <h1><b>Unit 9</b></h1>
  <p>Always like this</p>
</header>
	<body>
	  <div class="body">
      <div class="col-2">
        <div class="block-4 margin white">
          <div class="container" style="padding-top:8px;padding-bottom:8px" >
            <h3><b>Homework 1</b></h3>
            <h5 class="opacity"><b>Questionnaire</b></h5>
            <h5>Power by <strong>ThinkPHP</strong> and apply <strong>AJAX</strong> to <b>validate '_>'</b></h5>
              <input id = "name" class="input" type="name" name = "name" required>
              <label class="label validate">Name</label>

              <input id = "age" class="input" type="age" name = "age" required>
              <label class="label validate">Age</label>
      
              <input id = "email" class="input" type="email" name = "email" required>
              <label class="label">Email</label>
              <br><br>

            <label class="label">Gender</label>
            <div class="gender">
              <input id="male" class="radio" type="radio" name="gender" value="male" checked>
              <label class="validate">Male</label>
              <br>
              <input id="female" class="radio" type="radio" name="gender" value="female">
              <label class="validate">Female</label>
              <br>
              <input id="unknown" class="radio" type="radio" name="gender" value="" disabled>
              <label class="validate"> Don't know (Disabled)</label>
            </div>
            <br>
              <button id='submit' class = "btn light-grey border" onclick=''>Submit Survey</button>
              <button class = "btn light-grey border" type = "reset"  >Clear Survey</button>
            <br>
          <hr>
          <span><h6 class="left opacity">Show the Collected data here :）</h6><a id='query' class= "left btn white border hover-border-black">Query</a></span>
			<div id='collected' style='display:none'>
				<table id='itemstab' class="table bordered" ></table>
				<br>
				<button id='hide' class = "btn white border hover-border-black">Hide</button>
				<div class='operate'>
					<button id='delete' class = "btn white border hover-border-black">Delete</button>
				</div>
			</div><br><br>
			<hr>
          <a class="btn light-grey" href = "http://162.105.146.180:8081/unit8/cookbook_.xml">Previous<i class="padding-left "></i></a> <a class="btn light-grey" href = "">Next<i class="padding-left"></i></a>
        </div>
      </div>
    </div>
<!-- Quick Nav -->

    <div class="col-1">
      <div class="block-2 margin margin-top">
        <img src="http://162.105.146.180:8081/img/logo14.jpg" style="width:100%">
      </div>

      <div class="block-2 margin">
        <div class="container " style="padding-top:16px;padding-bottom:16px" >
          <h4>Quic Nav</h4>
            <a class="teal hover-dark-grey btn-block left-align" href="http://162.105.146.180:8081/index.html#unit1">Unit 1</a>
            <a class="hover-dark-grey btn-block red left-align" href="http://162.105.146.180:8081/index.html#unit2">Unit 2</a>
        <a class="hover-dark-grey btn-block yellow left-align" href="http://162.105.146.180:8081/index.html#unit3">Unit 3</a>
        <a class="hover-dark-grey btn-block orange left-align" href="http://162.105.146.180:8081/index.html#unit4">Unit 4</a>
        <a class="hover-dark-grey btn-block blue left-align" href="http://162.105.146.180:8081/index.html#unit5">Unit 5</a>
        <a class="hover-dark-grey btn-block indigo left-align" href="http://162.105.146.180:8081/index.html#unit6">Unit 6</a>
        <a class="hover-dark-grey btn-block pink left-align" href="http://162.105.146.180:8081/index.html#unit7">Unit 7</a>
        <a class="hover-dark-grey btn-block purple left-align" href="http://162.105.146.180:8081/index.html#unit8">Unit 8</a>
        <a class="hover-dark-grey btn-block brown left-align" href="http://162.105.146.180:8081/index.html#unit9">Unit 9</a>
        </div>
      </div>
    </div>
  </div>
  <footer class="container dark-grey margin-top" style="padding-top:8px;padding-bottom:8px" >
<p><a href="http://162.105.146.180:8081/main.html">Main</a> | <a href="http://162.105.146.180:8081/index.html">Homeworks</a> | <a href="http://162.105.146.180:8081/contact.html">Contact</a></p>
      <p>Copyright &copy; Chauncy_shen | <a href="http://net.pku.edu.cn/~zt/wst/">Web Technology Software</a></p>
</footer>
		<script>
		    $(document).ready(function () {
				$("#query").click(function(){
					$("#query").hide();
					$("#collected").show();
					$.get(
						"./query",
						{},
						function(data)
						{
							$("#itemstab").html("<tr style = color:#fff;background-color:#000000><th>Name</th><th>Age</th><th>Gender</th><th>Email</th><th>Delete</th></tr>");
							var obj = eval(data);
							for(i = 0; i < obj.length; i++)
							{
								
								var item=obj[i];
								var line="<tr class='row' id="+item['id']+">";
								line+="<td>"+item['name']+"</td>";
								line+="<td>"+item['age']+"</td>";
								line+="<td>"+item['gender']+"</td>";
								line+="<td>"+item['e_mail']+"</td>";
								line += "<td><input class='delcheck' type='checkbox'/></td></tr>";
								$("#itemstab").append(line);
							}
						},
						"json"
					);
				});
				$("#delete").click(function(){
					var dels = "";
					$(".delcheck").each(function(){
						if($(this).prop("checked"))
						{
							dels += $(this).parents(".row").attr("id")+"&";
						}
					});
					dels = dels.substring(0,dels.length-1);
					$.post(
						"./delete",
						{
							del:dels
						},
						function(data)
						{
							$("#query").trigger("click");
							alert("Delete succeeds!");
						}
					);
				});
				$("#submit").click(function(){
					var check=$("#name").val();
			      if(check=="") {
			        alert("Your name is required here!!!");
			        return false;
			      }
			      check=$("#age").val();
			      if(check=="") {
			        alert("Your age is required here!!!");
			        return false;
			      }var patrn=/^[0-9]{1,2}$/;
			      if(!patrn.test(check)){
			        alert("Your age is not valid!!!");
			        return false;
			      }
			      check=$("#email").val();
			      if(check=="") {
			        alert("Your email is required here!!!");
			        return false;
			      }
			      apos=check.indexOf("@")
			      dotpos=check.lastIndexOf(".")
			      if (apos<1||dotpos-apos<2) {
			          alert("Your email is not valid!!!");
			          return false;
			      }
					$.post(
						"./submit",
						{
							Name: $("#name").val(),
							Age: $("#age").val(),
							Gender: $("input[name='gender']:checked").val(),
							E_mail: $("#email").val()
						},
						function(data){
							alert("Submit succeeds! Click query button to see the collected data.");
						}
					);
					$("input").val("");
					$("input:radio:checked").attr("checked",false);
				});
				$("#hide").click(function(){
					$("#collected").hide();
					$("#query").show();
				});
		    });
		</script>
	</div></body>
</html>