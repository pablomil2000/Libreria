<?php require_once('header.view.php') ?>
        <hr />
        <br />
        <center>
            <h1>Tu carro de la compra:</h1>
        </center>
        <br/><br/>
        <table border ="0" width ="100%" cellspacing ="0">
			<tr>
				<th colspan="2">Libro</th>
				<th>Precio</th>
				<th>Cantidad</th>
				<th>Total</th>
				<th>Eliminar</th>
				<th>Actualizar</th>
			</tr>
			<form method="post">
				<tr>
					<td align="left"> 
						<img src="images/3.jpg" border="0" height="75" width="55"/> 
					</td>   
					<td align="left">Desarrollo de juegos en HTML5</td>
					<td align="center">31.50 € </td>
					<td align="center">
						<input type="text" name="cantidad" size="2" value="1" /> 
					</td>
					<td align="center">31.50 € </td>	
					<td align = "center">	
						<img src="images/trash.gif" width="25" height="35" border="0"/>
					</td>
					<td align = "center">                    
						<input type="image" name="image" src="images/actualizar.gif" width="25" height="25" />
					</td>			
				</tr>			
			</form>
			<tr>
				<th colspan="3" align="right">Totales:</th>
				<th align="center">3</th>
				<th align="center">85.40 €</th>
				<th></th>
				<th></th>		  
			</tr>		
		</table>
		<br/><br/>
        <table align="center" width="40%">
            <tr>
                <td>
                    <img align="left" src="images/seguir_comprando.png" border="0" title="Continuar Comprando"/>
               	</td>
                <td>
                    <img align="rigth" src="images/hacer_pedido.jpg" border="0" title="Hacer el Pedido"/>
               	</td>
            </tr>
        </table>		
    </body>
</html>
