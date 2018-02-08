<?php


namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;
use App\Http\Requests\StoreClientesRequest;
use App\Http\Requests\UpdateClientesRequest;

use DateTime;
use DB;
use Mail;



class ClientesController extends Controller
{
     
    /**
     * Display a listing of Cliente.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
          $this->dias_restantes();

          $this->enviar_email();

          $clientes = Cliente::all();

          return view('clientes.index', ['clientes' => $clientes]);
               
  }
            //Mediante esta funcion se calculan los dias restantes por cada cliente
            public function dias_restantes()
            {

                $clientes = Cliente::all();

        //fecha actual
          date_default_timezone_set('America/Caracas');
          $fecha_actual = date('Y-m-d H:i:s');
          $fecha_actual = new DateTime($fecha_actual);

            foreach ($clientes as $cliente) {

          

          //fecha en la que fue registrado el cliente
           $fecha_registro = $cliente->created_at;

          //$fecha_registro = DB::table('clientes')->value('created_at');
           $dias_registrados =  $cliente->dias_registrados;
        
          //fecha en la que se acaban los dias registrados del cliente
           $fecha_fin = date('Y-m-d H:i:s', strtotime("$fecha_registro + $dias_registrados day"));
           $fecha_fin = new DateTime($fecha_fin);

          //Aca se calculan los dias restantes
           $dias_restantes = $fecha_fin->diff($fecha_actual); 
           $dias_restantes = $dias_restantes->format("%d");

          //Se actualiza el valor del campo dias restantes en la BD
           DB::table('clientes')->where('id', $cliente->id)->update(['dias_restantes' => $dias_restantes]);

}
        //Se redirecciona al index  
          return redirect()->route('clientes.index');
}
            
               

         
           
//esta funcion permite enviar email de aquellos clientes que les queden 5 o menos dias de premium
public function enviar_email(){

            $clientes = Cliente::all();

  
           foreach ($clientes as $cliente) {

            if($cliente->dias_restantes<=5 && $cliente->email_enviado==0) {

                         $data = array(
                        'name' => $cliente->username,
                        'dias' => $cliente->dias_restantes,
                    );

                $body  = 'Al usuario '.$cliente->username.' le quedan '.$cliente->dias_restantes.' dias de premium!';

                Mail::send('clientes.alerta', $data, function ($message) use ($body) {

                $message->from('santurdaneta@gmail.com', '');

                $message->to('santurdaneta@gmail.com')->subject('Alerta de dias premium');

                $message->setBody($body);

    }); 

               echo "<script type=\"text/javascript\">alert(\"Se ha enviado un email de alerta debido a que al menos a un cliente le quedan menos de cinco dias premium!\");</script>";  

               DB::table('clientes')->update(['email_enviado' => 1]);
                }

}
}
  /**
     * Display a listing of Cliente.
     *
     * @return \Illuminate\Http\Response
     */
        public function show($id)
    {
         
 
    }

    /**
     * Show the form for creating new Cliente.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         
            return view('clientes.create', compact('cliente'));
      
     }

    /**
     * Store a newly created Cliente in storage.
     *
     * @param  \App\Http\Requests\StoreUsersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClientesRequest $request)
    {
        
          Cliente::create($request->all());
          //Se redirecciona al index  
          return redirect()->route('clientes.index');
    }

    /**
     * Show the form for editing Cliente.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $cliente = Cliente::findOrFail($id);        

        return view('clientes.edit', compact('cliente'));
    }

     
 

    /**
     * Update Cliente in storage.
     *
     * @param  \App\Http\Requests\UpdateClientesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClientesRequest $request, $id)
    {
           $cliente = Cliente::findOrFail($id);

               //la suma de los dias a agregar mas los dias registrados
           $dias_a_agregar=$request->dias_a_agregar+$cliente->dias_registrados; 

             // $se actualiza el valor del campo dias registrados en la BD
           $cliente->update(['dias_registrados' =>  $dias_a_agregar]);

 
        return redirect()->route('clientes.index');
    }

    
    /**
     * Remove Cliente from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();

        return redirect()->route('clientes.index');
    }

    

}
