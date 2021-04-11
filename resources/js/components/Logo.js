import React from 'react'
import { Keyframes, animated, config } from 'react-spring/renderprops'

const Logo = () => {
    const Content = Keyframes.Spring(
        async next => {
            await next({
                from:{opacity:0, marginTop:window.innerHeight / 3.6},
                opacity:1, marginTop:window.innerHeight / 2,
                config:{
                    tension:58,
                    mass:1,
                    friction:15}
            })
            
            await next({
                from:{marginTop:window.innerHeight / 2, transform:"scale(1)"},
                marginTop:window.innerHeight / 3.5, transform:"scale(0.7)",
                config:{delay:3000,tension:144,
                    mass:1,
                    friction:30}
            })

            
        }

    )
    
    return (
        <Content native>
            {
                props => (
                    <animated.div style={{...props}}>
                        <div className="logo-container" style={styles}>
                            <img style={{display:"inline"}} src={`/images/logo-250.png`} alt="Infortran Logo"/>
                        </div>
                    </animated.div>
                )
            }
      </Content>
    )
}

const styles = {
    textAlign:'center'
}

export default Logo