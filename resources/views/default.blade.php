@extends('layouts.default')
<style>
    .input-add{
		width: 80%;
		height: 30px;
		margin-left: 40px;
		border: 1px solid #ccc;
	}
	.input-update{
		width: 90%;
		height: 30px;
		margin: 0 40px;
		border: 1px solid #ccc;
	}
	table {
    text-align: center;
    width: 100%;
}
	textarea {
		width: 300px;
	}
	p {
		font-weight: bold;
		font-size: 20px;
	}
	.btn-border {
		display: inline-block;
		max-width: 180px;
		text-align: left;
		border: 2px solid  #dc70fa;
		font-size: 15px;
		color: #dc70fa;
		text-decoration: none;
		font-weight: bold;
		padding: 8px 16px;
		border-radius: 4px;
		transition: .4s;
	}
	.btn-border:hover {
		background-color: #dc70fa;
		border-color: #dc70fa;
		color: #FFF;
	}
	.card{
		background-color: #fff;
        width: 50vw;
        padding: 30px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border-radius: 10px;
    }
	.button-update{
		display: inline-block;
		max-width: 180px;
		text-align: left;
		border: 2px solid #fa9770;
		font-size: 15px;
		color: #fa9770;
		text-decoration: none;
		font-weight: bold;
		padding: 8px 16px;
		border-radius: 4px;
		transition: .4s;
		margin: 0 40px;
	}
	.button-delete {
		display: inline-block;
		max-width: 180px;
		text-align: left;
		border: 2px solid #71fadc;
		font-size: 15px;
		color: #71fadc;
		text-decoration: none;
		font-weight: bold;
		padding: 8px 16px;
		border-radius: 4px;
		transition: .4s;
	}
</style>
@section('title', 'default.blade.php')

@section('content')
<form action="/todo/create" method="POST">
  <table>
  <tr>
		  <td>
		  <span id="view_time"></span>
        <script type="text/javascript">
           document.getElementById("view_time").innerHTML = getNow();

            function getNow() {
	            var now = new Date();
	            var year = now.getFullYear();
	            var mon = now.getMonth()+1;
	            var day = now.getDate();
	            var hour = now.getHours();
	            var min = now.getMinutes();
	            var sec = now.getSeconds();

	
	            var s = year + "-" + mon + "-" + day + "" + hour + ":" + min + ":" + sec + ""; 
	            return s;
        }
        </script>
            </td>
			<td>
                <input type="text" class="input-update" value="a" name="content" />
              </td>
			  <td>
                <button class="button-update">??????</button>
              </td>
			  <td>
                <button class="button-delete">??????</button>
              </td>
</tr>
         </table>
  </table>
</form>
@endsection
