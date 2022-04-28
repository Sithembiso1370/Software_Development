import React from 'react';
import {StyleSheet, Text, View} from 'react-native';
import Icon from 'react-native-vector-icons/MaterialIcons';
import colors from '../assets/colors';
import CheckBox from '@react-native-community/checkbox';
import Input from './Input';
const Task = ({
  id,
  task,
  isComplete,
  focus,
  isLast,
  handleInput,
  handleComplete,
  handleDelete,
}) => {
  return (
    <View style={styles.task}>
      <View style={styles.row}>
        <Icon name="drag-indicator" size={20} color={colors.lightGray} />
        <CheckBox
          value={isComplete}
          onValueChange={newValue => handleComplete(id)}
          tintColors={{true: colors.lightGray, false: colors.lightGray}}
        />
        <Input
          focus={isLast ? true : false}
          style={[
            isComplete
              ? {
                  textDecorationLine: 'line-through',
                  textDecorationStyle: 'solid',
                }
              : {},
          ]}
          value={task}
          onSubmitEditing={event => {
            console.log('calling submit');
            handleInput(id, event.nativeEvent.text);
          }}
        />
      </View>
      <Icon
        name="close"
        size={20}
        color={colors.lightGray}
        onPress={() => handleDelete(id)}
      />
    </View>
  );
};

export default Task;

const styles = StyleSheet.create({
  row: {
    flexDirection: 'row',
    alignItems: 'center',
  },

  task: {
    paddingHorizontal: 15,
    paddingVertical: 2,
    flexDirection: 'row',
    alignItems: 'center',
    justifyContent: 'space-between',
  },
});
