import React from 'react';
import { View, Text, StyleSheet } from 'react-native';

function SecondPage() {
  return (
        <View style={styles.container}>
          <Text style={styles.edu}>EDUCATIONAL ATTAINMENT</Text>
          <View style={styles.con}>
                <Text style={styles.level}>ELEMENTARY</Text>         
                <Text style={styles.school}>Sta. Lucia Elementary School</Text>
                <Text style={styles.date}>June 2009 - March 2016</Text>
          </View>
          
          <View style={styles.con}>
                <Text style={styles.level}>HIGH SCHOOL</Text>
                <Text style={styles.school}>Nabua National High School</Text>
                <Text style={styles.date}>June 2016 - July 2022</Text>
          </View>
          
          <View style={styles.con}>
                <Text style={styles.level}>COLLEGE</Text>
                <Text style={styles.school}>Camarines Sur Polytechnic Colleges</Text>
                <Text style={styles.date}>August 2022 - Present</Text>
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
    con: {
      backgroundColor: '#80B3FF',
      width: '70%',
      padding: 20,
      borderRadius: 10,
      marginBottom: 10,
    },
    edu: {
      fontSize: 25,
      fontWeight: 'bold',
      marginBottom: 20,
      color: '#071952',
    },
    level: {
      fontSize: 20,
      fontWeight: 'bold',
    },
    school: {
      color: 'blue',
      fontWeight: 'bold',
    },
    date: {
      color: '#4B527E',
    },
  });

export default SecondPage;
