import React, { Component } from 'react';  
import { AppRegistry, SectionList, StyleSheet, Text, View } from 'react-native';  
  
// In this example, we create a SectionList with title and data. The sections prop is used to create the list of title and data values. 
// The renderSectionHeader displays the header section of the list view.
export default class SectionListBasics extends Component {  
    render() {  
        return (  
            <View style={styles.container}>  
                <SectionList  
                    sections={[  
                        {title: 'A', data: ['ALTERED','ABBY','ACTION U.S.A.','AMUCK','ANGUISH']},  
                        {title: 'B', data: ['BEST MEN','BEYOND JUSTICE','BLACK GUNN','BLOOD RANCH','BEASTIES']},  
                        {title: 'C', data: ['CARTEL', 'CASTLE OF EVIL', 'CHANCE', 'COP GAME', 'CROSS FIRE',]},  
                    ]}  
                    renderItem={({item}) => <Text style={styles.item}>{item}</Text>}  
                    renderSectionHeader={({section}) => <Text style={styles.sectionHeader}>{section.title}</Text>}  
                    keyExtractor={(item, index) => index}  
                />  
            </View>  
        );  
    }  
}  
  
const styles = StyleSheet.create({  
    container: {  
        flex: 1,  
        backgroundColor: "#5ead97"  
    },  
    sectionHeader: {  
        paddingTop: 2,  
        paddingLeft: 10,  
        paddingRight: 10,  
        paddingBottom: 2,  
        fontSize: 22,  
        fontWeight: 'bold',  
        color: "#fff",  
        backgroundColor: '#8fb1aa',  
    },  
    item: {  
        padding: 10,  
        fontSize: 18,  
        height: 44,  
    }  
}) 