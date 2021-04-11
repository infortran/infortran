import React from 'react'
import { Spring } from 'react-spring/renderprops'
import styles from './style.module.css'

const ClientSelector = (prps) => {

    console.log(styles)
    return (
        <Spring
        from={{opacity:0, transform:"scale(0.5)"}}
        to={{opacity:1, transform:"scale(1)"}}
        config={{
            delay:6000,
            mass:1,
            friction:12,
            tension:96
        }}>
            {
                props => (
                    <div style={props} className="flex-1 pointer">
                        <div className={`rounded-lg bg-gray-200 pt-10 m-5 shadow ${styles.clientSelectorCard}`}>
                            <div className="text-center">
                                <img style={imgStyle} src="images/freddy-team.jpg" alt=""/>
                            </div>
                            <div className="bg-white pt-20 pb-10">
                                <p className="text-4xl">{prps.clientType}</p>
                            </div>
                        </div>
                    </div>
                )
            }

        </Spring>

    )
}


const imgStyle = {
    width:80,
    height:80,
    borderRadius:'50%',
    display:'inline',
    marginBottom:'-35px'

}

export default ClientSelector