<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="glyphicon glyphicon-plus"></i> Editar elemento padre                
            </div>
            {{ HTML::ul($errors->all()) }}
            {{ Form::open(array('url' => "menus/$menu->id/update")) }}    
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3">              
                       
                        <div class="form-group">
                            {{ Form::label('name', 'Nombre') }}                                
                            {{Form::text('name', $menu->name, array('class' => 'form-control input-xlarge', 'required' => 'true'))}}                         
                        </div>

                        <div class="form-group">
                            {{ Form::label('description', 'Descripción') }}                         
                            {{Form::textarea('description', $menu->description, array('class' => 'form-control input-xlarge', 'required' => 'true','rows'=>'3'))}}             
                        </div>

                        <div class="form-group">                                                            
                            {{ Form::checkbox('is_visible', '1', Input::old('is_visible', $menu->is_visible)) }}
                            {{ Form::label('is_visible', 'Es Visible') }}                        
                        </div>                        

                        <div class="form-group">
                            {{ Form::label('index', 'Orden') }}                         
                            {{Form::number('index', $menu->index, array('class' => 'form-control input-xlarge', 'required' => 'true'))}}                        
                        </div>                          
                
                        {{Form::submit('Actualizar', array('Class'=>'btn btn-default'))}} 
                        {{link_to("menus", 'Cancelar', $attributes = array('Class'=>'btn btn-default'), $secure = null);}}   
                    </div>
                 </div> 
            </div>
            </div>
            {{ Form::close() }}
        </div>             
    </div>                    
</div>