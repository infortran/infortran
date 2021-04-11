import React from 'react';
import ReactDOM from 'react-dom';
import Logo from './Logo'
import ClientSelector from './clientselector/ClientSelector'


const Cotizador = (props) => {
    //console.log(props.assetUrl)
    return (
        <div className="container" >
            <div className="row" style={prueba}>
                <div className="col-md-8" style={main}>
                    <Logo />
                    <div className="flex">
                        <ClientSelector clientType={'Persona'}/>
                        <ClientSelector clientType={'Empresa'} />
                    </div>

                </div>
            </div>
        </div>
    );
}

const prueba = {
    'display':'flex',
    'justifyContent':'center',
    'alignItems':'center'
}
const main = {
    textAlign:'center'
}

export default Cotizador;

if (document.getElementById('cotizador')) {
    const assetUrl = document.getElementById("cotizador").getAttribute("assetUrl");
    ReactDOM.render(<Cotizador assetUrl={assetUrl}/>, document.getElementById('cotizador'));
}