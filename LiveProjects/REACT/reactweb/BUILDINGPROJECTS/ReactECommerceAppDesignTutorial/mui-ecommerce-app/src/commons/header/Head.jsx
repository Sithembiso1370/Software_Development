import React from 'react'

export const Head = () => {
  return (
      <>
        <section className='head'>
            <div className="container d_flex">
                {/* START LEFT ROW */}
                <div className="left row">
                    <i className="fa fa-phone"></i>
                    <label htmlFor="">+027 962 9102</label>
                    <i className="fa fa-envelope"></i>
                    <label htmlFor="">blabla@gmail.com</label>
                </div>
                {/* END LEFT ROW */}
                <div className="right row RText">
                    <label htmlFor="">Theme FAQ's</label>
                    <label htmlFor="">Need Helps</label>
                    <span>🏳️</span>
                    <label htmlFor="">EN</label>
                    <span>🏳️</span>
                    <label htmlFor="">USD</label>
                </div>
            </div>
        </section>
      </>
  )
}
