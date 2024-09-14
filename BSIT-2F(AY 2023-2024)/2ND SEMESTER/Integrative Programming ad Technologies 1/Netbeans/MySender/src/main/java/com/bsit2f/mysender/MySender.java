package com.bsit2f.mysender;

import javax.jms.Connection;
import javax.jms.ConnectionFactory;
import javax.jms.Destination;
import javax.jms.JMSException;
import javax.jms.MessageProducer;
import javax.jms.Session;
import javax.jms.TextMessage;
import org.apache.activemq.ActiveMQConnection;
import org.apache.activemq.ActiveMQConnectionFactory;

public class MySender {
    public static void main(String[] args) throws JMSException {
        /* 1. Getting JMS connection from the JMS server and starting it. */
        ConnectionFactory connectionFactoryName = new ActiveMQConnectionFactory(ActiveMQConnection.DEFAULT_BROKER_URL);
        Connection connectionName = connectionFactoryName.createConnection();
        connectionName.start();
        
        /* 2. Creating a non transactional session to send/receive JMS message. */
        Session sessionName = connectionName.createSession(false, Session.AUTO_ACKNOWLEDGE);
        
        /* 3. The queue will be created automatically on the server. */
        Destination destinationName = sessionName.createQueue("finalproj");
        
        /* 4. MessageProducer is used for sending messages to the queue. */
        MessageProducer sender = sessionName.createProducer(destinationName);
        TextMessage message = sessionName.createTextMessage("Hi!, How are you?");
        
        /* 5. This is to send our message. */
        sender.send(message);
        System.out.println("Message '" + message.getText() + ", Sent Successfully to the Queue");
        
        /* 6. Closing JMS connection from the JMS server. */
        connectionName.close();
    }
}