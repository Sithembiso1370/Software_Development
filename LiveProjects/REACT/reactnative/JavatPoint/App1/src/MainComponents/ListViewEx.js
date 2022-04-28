import React, { Component } from 'react'  
import { Text,  StyleSheet } from 'react-native'  
// import { ListView }  from 'deprecated-react-native-listview'
  
export default class MyListComponent extends Component {  
    constructor() {  
        super();  
        const ds = new ListView.DataSource({rowHasChanged: (r1, r2) => r1 !== r2});  
        this.state = {  
            dataSource: ds.cloneWithRows(['Android','iOS', 'Java','Php', 'Hadoop',  
                'Sap', 'Python','Ajax', 'C++',  
                'Ruby', 'Rails','.Net', 'Perl']),  
        };  
    }  
  
    render() {  
        return (  
            <ListView  
                dataSource={this.state.dataSource}  
                renderRow={  
                    (rowData) =>  
                        <Text style={{fontSize: 20}}>{rowData}</Text>}  
            />  
        );  
    }  
}  