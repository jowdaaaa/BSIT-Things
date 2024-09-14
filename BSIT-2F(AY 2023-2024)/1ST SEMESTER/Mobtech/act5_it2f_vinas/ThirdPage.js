import React from 'react';
import { View, Text, StyleSheet } from 'react-native';

function ThirdPage() {
  return (
        <View style={styles.container}>
          <Text style={styles.title}>FUN INFORMATION</Text>
          <View style={styles.h}>
                <Text style={styles.categ}>| HOBBIES</Text>         
                <Text style={styles.list}>     Watching Anime</Text>
                <Text style={styles.list}>     Reading Manga</Text>
                <Text style={styles.list}>     Playing Badminton</Text>
                <Text style={styles.list}>     Listening to Music</Text>
          </View>
          
          <View style={styles.i}>
                <Text style={styles.categ}>| HITS</Text>
                <Text style={styles.list}>     Shoes</Text>
                <Text style={styles.list}>     Peaceful Places</Text>
                <Text style={styles.list}>     Sunsets</Text>
                <Text style={styles.list}>     Sunsets</Text>
          </View>
          
          <View style={styles.m}>
                <Text style={styles.categ}>| MISS <Text style={styles.charot}>ko na sya</Text> </Text> 
                <Text style={styles.list}>     Slow Internet</Text>
                <Text style={styles.list}>     Careless</Text>
                <Text style={styles.list}>     Dusts</Text> 
          </View>
        </View>
  );
}

const styles = StyleSheet.create({
    container: {
      flex: 1,
      alignItems: 'center',
      justifyContent: 'center',
      backgroundColor: '#E4F1FF',
    },
    h: {
      backgroundColor: '#A0BFE0',
      width: '70%',
      padding: 20,
      borderRadius: 10,
      marginBottom: 10,
    },
    i: {
      backgroundColor: '#8DDFCB',
      width: '70%',
      padding: 20,
      borderRadius: 10,
      marginBottom: 10,
    },
    m: {
      backgroundColor: '#FF9EAA',
      width: '70%',
      padding: 20,
      borderRadius: 10,
      marginBottom: 10,
    },
    title: {
      fontSize: 25,
      fontWeight: 'bold',
      marginBottom: 20,
      color: '#071952',
    },
    categ: {
      fontSize: 20,
      fontWeight: 'bold',
    },
    list: {
      
    },
    charot: {
      color: '#FF0060',
      fontSize: 13,
    },
  });

export default ThirdPage;
