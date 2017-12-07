
package Clases;
import java.sql.*;
import java.util.ArrayList;
import java.util.Vector;
import java.util.logging.Logger;


public class conexion {
    Connection con;
    static ResultSet resultado;
    static PreparedStatement ps;
    
    public Connection conexion()   //Va a conectar con base de datos
    {
        try{
            Class.forName("com.mysql.jdbc.Driver");
            con = DriverManager.getConnection("jdbc:mysql://localhost/tablas","root", "12345");
        }catch(Exception e)
        {
            Logger.getLogger("Error");
        }
        return con;
    }
    
    Statement createStatement()
        {
            throw new UnsupportedOperationException("No soportado");
        }
    
    public static ArrayList<String> llenar_combo()
    {
        ArrayList<String> lista = new  ArrayList<String>();
        String sql = "SELECT name_patient FROM patient";
        try
        {
            resultado = ps.executeQuery(sql);
        }catch(Exception e)
        {
            Logger.getLogger("Error");
        }
        
        try
        {
            while(resultado.next())
            {
                lista.add(resultado.getString(sql));
            }
        }catch(Exception e)
        {
            Logger.getLogger("Error");
        }
        return lista;
     }
}
    
   






