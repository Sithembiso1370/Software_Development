    // (2)
    const book1 = {
        title: 'Book One',
        auther: ' Sithembiso Maphanga',
        year:'2013',
        getSummary: function(){
            return this.title + ' was written by '+this.auther+ ' in '+this.year;
        }
    };

    const book2 = {
        title: 'Book Two',
        auther: 'Ntokozo Maphanga',
        year:'2017',
        getSummary: function(){
            return this.title + ' was written by '+this.auther+ ' in '+this.year;
        }
    };


    console.log(book1.title)
    console.log('book1.getSummary()| ',book1.getSummary());
    console.log('book2.getSummary()| ',book2.getSummary());
    console.log("Object.keys(book1)",Object.keys(book1));
    console.log("Object.values(book1)",Object.values(book1));
    // const s1 = 'hello';
// (1)
    // console.log(s1+'sthe');
    // console.log(typeof s1);
    // console.log(typeof 1);
    // console.log(typeof true);
    // var  mnewstrng =  new String;
    // console.log('mnewstrng =' ,mnewstrng);
    // mnewstrng['name'] = 'yey';
    
    //  console.log('mnewstrng =' ,mnewstrng);
    //  console.log('mnewstrng.name =' ,mnewstrng.name);
    //  console.log('mnewstrng['+'name'+'] =' ,mnewstrng['name']);
    //  console.log('typeof =' ,typeof mnewstrng);